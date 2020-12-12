<?php
namespace app\controllers;


use app\models\UserJoinForm;
use app\models\UserLoginForm;
use Yii;
use app\models\UserIdentity;
use app\models\UserRecord;
use yii\web\Controller;

class UserController extends Controller{
    public function actionJoin()
    {
        if(Yii::$app->request->isPost)
            return $this->actionJoinPost();
            $userJoinForm = new UserJoinForm();
            $userRecord = new UserRecord();
//            $userRecord->setTestUser();
            $userJoinForm->setUserRecord($userRecord);

        return $this->render('join',['userJoinForm'=>$userJoinForm]);
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        if ($userJoinForm->load(Yii::$app->request->post()))
            $exist_data = UserRecord::find()->where(['email'=>$userJoinForm->email])->one();
            if ($exist_data)
            {
                $exist_data->setPassword($userJoinForm->password);
                $exist_data->is_created = 1;
                $exist_data->save();
                return $this->redirect('/user/login');
            }
            else
            {
                if($userJoinForm->validate())                          //Нужно для пользовательской проверки
                {
                    $userRecord = new UserRecord();
                    $userRecord->setUserJoinForm($userJoinForm);
                    $userRecord->is_created = 1;
                    $userRecord->save();
                    $userIdentity = UserIdentity::findIdentity($userRecord->id);
                    Yii::$app->user->login($userIdentity);
                    return $this->redirect('/');
                }
            }
        return $this->render('join',['userJoinForm'=>$userJoinForm]);
    }



    public function actionLogin()
    {
        if(Yii::$app->request->isPost)
            return $this->actionLoginPost();
        $userLoginForm = new UserLoginForm();
        return $this->render('login',['userLoginForm'=>$userLoginForm]);
    }

    public function actionLoginPost()
    {
        $userLoginForm = new UserLoginForm();
        if ($userLoginForm->load(Yii::$app->request->post()))
            if ($userLoginForm->validate())
            {
                $userLoginForm->login();
                return $this->redirect('/');
            }
        return $this->render('login',['userLoginForm'=>$userLoginForm]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/');
    }
}