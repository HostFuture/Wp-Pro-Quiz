<?php

/**
 * @property WpProQuiz_Model_Quiz quiz
 * @property bool inQuiz
 * @property int points
 */
class WpProQuiz_View_FrontToplist extends WpProQuiz_View_View
{

    public function show()
    {
        ?>
        <div style="margin-bottom: 40px; margin-top: 10px;" class="wpProQuiz_toplist"
             data-quiz_id="<?php echo $this->quiz->getId(); ?>">
            <?php if (!$this->inQuiz) { ?>
                <h3 style="margin-bottom:-1.5%;margin-left:1%;margin-top:4%;"><?php _e('Leaderboard', 'wp-pro-quiz'); ?></h3>
            <?php } ?>
            <div class="table-responsive">
              <table class="wpProQuiz_toplistTable">
                <caption><?php printf(__('maximum of %s points', 'wp-pro-quiz'), $this->points); ?></caption>
                <thead>
                  <tr>
                    <th style="width: 50px; font-size: 0.85rem;"><?php _e('Pos.', 'wp-pro-quiz'); ?></th>
                    <th style="text-align: left !important; font-size: 0.85rem;"><?php _e('Name', 'wp-pro-quiz'); ?></th>
                    <th style="width: 200px; font-size: 0.85rem;"><?php _e('Entered on', 'wp-pro-quiz'); ?></th>
                    <th style="width: 60px; font-size: 0.85rem;"><?php _e('Points', 'wp-pro-quiz'); ?></th>
                    <th style="width: 120px; font-size: 0.85rem;"><?php _e('Quiz Time', 'wp-pro-quiz'); ?></th>
                    <th style="width: 75px; font-size: 0.85rem;"><?php _e('Result', 'wp-pro-quiz'); ?></th>
                    <th style="width: 75px; font-size: 0.85rem;"><?php _e('Percentile', 'wp-pro-quiz'); ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="7"><?php _e('Table is loading', 'wp-pro-quiz'); ?></td>
                  </tr>
                  <tr style="display: none;">
                    <td colspan="7"><?php _e('No data available', 'wp-pro-quiz'); ?></td>
                  </tr>
                  <tr style="display: none;">
                    <td style="font-size: small;"></td>
                    <td style="text-align: left !important; font-size: small;"></td>
                    <td style="color: rgb(124, 124, 124); font-size: small;"></td>
                    <td style="font-size: small;"></td>
                    <td style="font-size: small;"></td>
                    <td style="font-size: small;"></td>
                    <td style="font-size: small;"></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>

        <?php
    }
}