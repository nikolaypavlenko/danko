<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `tag`.
 */
class m160628_172247_drop_position_from_tag extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('tag', 'img');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('tag', 'img', $this->string());
    }
}
