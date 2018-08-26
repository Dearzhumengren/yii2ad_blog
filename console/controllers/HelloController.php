<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/17
 * Time: 19:15
 */
namespace console\controllers;

use common\models\Post;
use Yii;
use yii\console\Controller;

class HelloController extends Controller
{
    public $rev;

    public function options()
    {
        return ['rev'];
    }



    public function actionIndex()
    {
        if($this->rev == 1){
            echo strrev("hello world").'\n';
        }else{
            echo 'hello world';
        }
    }

    public function actionList()
    {
        $posts = Post::find()->all();
        foreach ($posts as $apost)
        {
            echo ($apost['id']."--".$apost['title']."\n");
        }
    }

    public function actionWho($name)
    {
        echo "I'm".$name;
    }

    public function actionBoth($name,$bot)
    {
        echo "IM".$name.$bot;
    }

    public function actionAll(array $name)
    {
        print_r($name);
    }

}