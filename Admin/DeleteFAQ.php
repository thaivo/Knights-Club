<?php

require_once '../ContactUs_Vedanshi/database.php';
require_once 'models/FAQ.php';
if (isset($_POST['deleteFAQ'])) {
  $id = $_POST['id'];
  $db = Database::getDb();

  $f = new FAQ();
  $FAQ = $f->getFAQById($id, $db);

  $question = $FAQ->question;
  $answer = $FAQ->answer;
  $category = $FAQ->category;
}
if (isset($_POST['deleteconfirm'])) {
  $id = $_POST['id'];
  $db = Database::getDb();

  $f = new FAQ();
  $count = $f->deleteFAQ($id, $db);
  if ($count) {
    header("Location: ListFAQ.php");
  } else {
    echo " Error in deleting!!";
  }


}
if (isset($_POST['close'])) {
  header("Location: ListFAQ.php");
}
require_once 'header.php';
?>

  <!-- MAIN CONTENT-->
  <div class="main-content">
  <div class="col-md-12">

  <div class="card">
    <div class="card-header">
      <strong class="card-title">Confirm Delete</strong>
    </div>
    <div class="card-body">

      <form method="post">
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
          <div>Are you sure you want to delete this Question?</div>
          You can't get it back.
        </div>
        <input type="hidden" name="id" value="<?= $id; ?>"/>
        <div><?= $question; ?></div>
        <div><?= $answer; ?></div>
        <button name="deleteconfirm" class="btn btn-danger btn-sm">Delete</button>
        <button name="close" class="btn btn-primary btn-sm">Cancel</button>

      </form>
    </div>
  </div>
<?php require_once 'footer.php' ?>