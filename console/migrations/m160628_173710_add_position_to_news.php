<?php

use yii\db\Migration;

/**
 * Handles adding position to table `news`.
 */
class m160628_173710_add_position_to_news extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('news', 'tag_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('news', 'tag_id');
    }
}
