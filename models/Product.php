<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property integer $count_product
 * @property string $small_img
 * @property string $big_img
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'count_product'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 150],
            [['small_img', 'big_img'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'count_product' => 'Count Product',
            'small_img' => 'Small Img',
            'big_img' => 'Big Img',
        ];
    }
}
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vis'], 'integer'],
            [['name', 'email'], 'string', 'max' => 50],
            [['message'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
            'vis' => 'Vis',
        ];
    }
}
    ?>