<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `user`.
 */
class m160624_211211_drop_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('user');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
        ]);
    }
}
