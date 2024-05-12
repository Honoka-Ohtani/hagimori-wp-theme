<?php

if(!isset($_POST['form_name'], $_POST['form_mail'], $_POST['form_message'])) {
  echo 'error occured!';
  exit;
}

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$name = filter_var($_POST['form_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$company_name = filter_var($_POST['form_company_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$mail = filter_var($_POST['form_mail'], FILTER_VALIDATE_EMAIL);
$message = filter_var($_POST['form_message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$body = "[ お問い合わせ内容 ]
        
■Name
　{$name}
■Company
　{$company_name}
■Email
　{$mail}
■Message
　{$message}
";

$subject = "お問い合わせありがとうございました。";
$from = 'noreply@jirujiaru826.art';
$param = '-f' . $from;
$from_name = '萩森じあ OFFICIAL SITE';

$header = '';
$header .= "Content-Type: text/plain \r\n";
$header .= "Return-Path: " . $from . " \r\n";
$header = "From: $from_name <$from> \r\n";
$header .= "Sender: " . $from ." \r\n";
$header .= "Reply-To: " . $from . " \r\n";
$header .= "Organization: " . $from_name . " \r\n";

ini_set("mbstring.internal_encoding","UTF-8");
mb_language("uni");
$flg = mb_send_mail($mail, $subject, $body, $header, $param);
$admin_flg = mb_send_mail(ADMIN_EMAIL, 'お問い合わせがありました', $body, $header, $param);

if(!$flg || !$admin_flg) {
    echo 'メール送信エラー';
    exit;
}
?>

<?php get_header(); ?>
<style>
.header {
  background-color: rgba(255, 255, 255, 0)
}

.page-title {
  color: #fff;
}

.openbtn {
  background-color: rgba(255, 255, 255, 0);
  backdrop-filter: blur(0px);
}

.openbtn span {
  background-color: #fff;
}
</style>
<!-- thanks page -->
<div class="overflow-hidden">

  <div class="thanks-message">
    <p class="completion">送信完了しました</p>
    <p class="sub-text">お問い合わせいただき<br class="sp">ありがとうございます
    </p>
  </div>
  <div class="js-opening__background p-top-kv__background-inner">
    <div class="p-top-kv__background-wrapper">
      <div class="p-top-kv__background-block __1">
        <ul class="js-opening__card-list p-top-kv__background-block-list __1">
          <li class="p-top-kv__background-block-item">
            <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thanks-5.jpg" alt=""
                class="js-opening__card-item c-img__def p-top-kv__background-block-item-img-inside"
                data-opening-card-order="0">
            </picture>
          </li>
        </ul>
      </div>
      <div class="p-top-kv__background-block __2">
        <ul class="js-opening__card-list p-top-kv__background-block-list __1">
          <li class="p-top-kv__background-block-item">
            <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thanks-6.jpg" alt=""
                class="js-opening__card-item c-img__def p-top-kv__background-block-item-img-inside"
                data-opening-card-order="4">
            </picture>
          </li>
        </ul>
      </div>
      <div class="p-top-kv__background-block __1">
        <ul class="js-opening__card-list p-top-kv__background-block-list __1">
          <li class="p-top-kv__background-block-item">
            <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thanks-5.jpg" alt=""
                class="js-opening__card-item c-img__def p-top-kv__background-block-item-img-inside"
                data-opening-card-order="8">
            </picture>
          </li>
        </ul>
      </div>
      <div class="p-top-kv__background-block __2">
        <ul class="js-opening__card-list p-top-kv__background-block-list __1">
          <li class="p-top-kv__background-block-item">
            <picture>
              <source media="(max-width:768px)" srcset="/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thanks-6.jpg" alt=""
                class="js-opening__card-item c-img__def p-top-kv__background-block-item-img-inside"
                data-opening-card-order="12">
            </picture>
          </li>
        </ul>
      </div>
      <div class="p-top-kv__background-block __1">
        <ul class="js-opening__card-list p-top-kv__background-block-list __1">
          <li class="p-top-kv__background-block-item">
            <picture>
              <source media="(max-width:768px)" srcset="/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thanks-5.jpg" alt=""
                class="js-opening__card-item c-img__def p-top-kv__background-block-item-img-inside"
                data-opening-card-order="16">
            </picture>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>