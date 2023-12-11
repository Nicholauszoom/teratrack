<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ContactusController extends Controller
{
    public function actionIndex()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Retrieve the phone and message inputs
            $phone = $model->phone;
            $message = $model->message;

            // Send email using the retrieved values
            Yii::$app->mailer->compose()
                ->setTo('nicholaussomi5@gmail.com')
                ->setFrom([$model->email => $model->name])
                ->setSubject('Contact Form Submission')
                ->setTextBody("Phone: $phone\n\n$message")
                ->send();

            Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }





  

}