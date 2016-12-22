<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "NossosNumeros".
 *
 * @property integer $id
 * @property string $busdoors
 * @property string $taxis
 * @property string $sacosPao
 * @property string $kmRodados
 * @property string $impactoSacoPao
 */
class NossosNumeros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'NossosNumeros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['busdoors', 'taxis', 'sacosPao', 'kmRodados', 'impactoSacoPao'], 'required'],
            [['busdoors', 'taxis', 'sacosPao', 'kmRodados', 'impactoSacoPao'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'busdoors' => 'Busdoors',
            'taxis' => 'Táxis',
            'sacosPao' => 'Sacos de Pão',
            'kmRodados' => 'Km rodados por nossos veículos',
            'impactoSacoPao' => 'Impactos de mídia em saco de pão',
        ];
    }
}
