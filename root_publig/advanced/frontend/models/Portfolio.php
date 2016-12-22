<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property integer $id
 * @property string $empresa
 * @property string $texto
 * @property string $foto
 * @property string $tipo
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empresa', 'texto', 'foto', 'tipo'], 'required'],
            [['texto'], 'string'],
            [['empresa'], 'string', 'max' => 100],
            [['foto'], 'string', 'max' => 90],
            [['tipo'], 'string', 'max' => 30],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empresa' => 'Empresa',
            'texto' => 'Texto',
            'foto' => 'Imagem',
            'tipo' => 'Tipo',
            'file'=> 'Imagem',
        ];
    }
}
