<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Dispersion;

class MainController extends Controller{

    public function actionIndex() {
        $math = (new \yii\db\Query())->select('@m:=SUM(amount * time) as res')->from('dispersion')->all();
        $disp = (new \yii\db\Query())->select("@d:=sqrt(sum(amount * time * time) - (@m * @m) ) as res")->from('dispersion')->all();

        $model = new Dispersion();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', true);
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('success', false);
            }
        }
        return $this->render('index', ['model' => $model, 'disp' => $disp[0]['res']]);
    }
}