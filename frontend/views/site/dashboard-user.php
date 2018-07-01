<!-- <?php

/* @var $this yii\web\View */

//$this->title = 'FindingTailor';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Dashboard User</h1>

        <p class="lead">Finding Tailor</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    </div>
</div>
 -->

 <?php

use yii\helpers\Html;


?>   
<!-- <div class="page-header header-filter" data-parallax="true"> -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Cari Penjahit Pilihanmu!</h1>
          <h4>Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
          <br>
        </div>
        <div class="col-md-6" style="padding: 100px;">
          <?= Html::a('Cari Penjahit!', ['cari-penjahit/index'], ['class' => 'btn btn-danger btn-lg pull-right']) ?>
        </div>
      </div>
    </div>
  <!-- </div> -->
  <div class="content">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header card-chart card-header-info">
            <h4><b>Rekomendasi Model Untukmu</b></h4>
          </div>  
          <div class="card-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="http://localhost/advancedraw/frontend/web/materialkitassets/img/bg7.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Gunakan sebagai Contoh Model</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="http://localhost/advancedraw/frontend/web/materialkitassets/img/bg7.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Gunakan sebagai Contoh Model</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="http://localhost/advancedraw/frontend/web/materialkitassets/img/bg7.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Gunakan sebagai Contoh Model</a>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
        
      </div>  
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://presentation.creative-tim.com">
              About Us
            </a>
          </li>
          <li>
            <a href="https://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
