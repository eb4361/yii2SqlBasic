<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';

$aboutUrl = Url::toRoute('site/about');
$contactUrl = Url::toRoute('site/contact');
$loginUrl = Url::toRoute('site/login');



$about = '/site/about';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Poljuben Meni</h2>

                <p><a class="btn btn-default" href="<?php echo "$aboutUrl"; ?>">About</a></p>
				
                <p><a class="btn btn-default" href="<?php echo "$contactUrl"; ?>">Contact</a></p>
				
                <p><a class="btn btn-default" href="<?php echo "$loginUrl"; ?>">Login</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Progress Bar</h2>

                <div class="progress">
					<div class="progress-bar" role="progressbar" style="width: <?php echo "$progress"; ?>%" aria-valuenow="<?php echo "$progress"; ?>" aria-valuemin="0" aria-valuemax="100"></div>
				</div>

            </div>
            <div class="col-lg-4">
                <h2>Progress:</h2>

                <p>
					<?php echo "$progress"; ?> %
					<br>
				</p>
            </div>
        </div>

    </div>
</div>
