<?php

namespace Carter\Mailer;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Serviceprovider;
use Swift_Mailer;
use Swift_SmtpTransport;
use Swift_Message;
class MailerServiceProvider extends Serviceprovider
{
	public function boot()
	{
		/**$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views','mailer');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');**/
		$this->mergeConfigFrom(__DIR__.'/config/mailer.php','mailer');
		$this->publishes([__DIR__.'/config/mailer.php'=>config_path('mailer.php'),
		//__DIR__.'/views'=>resource_path('views/vendor/mailer')
		]);
	}

	public function register()
	{	
		$this->app->booting(function() {
            $loader = AliasLoader::getInstance();
            $loader->alias('Mailer', MailerServiceProvider::class);
        });
	}

	static function sendmail($to,$subject,$msg)
	{
		$transport = (new Swift_SmtpTransport(config('mailer.host'), config('mailer.port')))
		  ->setUsername(config('mailer.username'))
		  ->setPassword(config('mailer.password'))
		;

		// Create the Mailer using your created Transport
		$mailer = new Swift_Mailer($transport);

		// Create a message
		$message = (new Swift_Message($subject))
		  ->setFrom([config('mailer.from.address') => config('mailer.from.name')])
		  ->setTo($to)
		  ->setBody($msg)
		  ;

		// Send the message
		return $result = $mailer->send($message);
	}
}