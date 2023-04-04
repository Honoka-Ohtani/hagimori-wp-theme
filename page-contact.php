<?php get_header(); ?>
<!-- contact page -->
<style>
  body{
    position:relative;
  }
  body:before{
    content:'';
    display: block;
    position: fixed;
    top:0;
    left:0;
    width: 100%;
    height: 100vh;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/confirmation.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .openbtn{
    background-color:rgba(255,255,255,0);
  }
  #main{
    background-color: rgba(255, 255, 255, 0.8);
    -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  } 
</style>
<div class="contact-Form">
        <div class="contact-message">
          <p class="contact-message__text">
            お仕事、ご依頼、ご感想のメールは<br class="sp">こちらから。
          </p>
        </div>
        <form action="<?php echo home_url('confirmation/'); ?>" method="post">
          <dl class="flex flex-wrap lg:flex-nowrap items-left w-full Form-Item">
            <dt class="w-full mb-4 lg:mb-0 lg:w-4/12">
              NAME
              <span class="Form-Item-Label-Required">
                  *
                </span>
            </dt>
            <dd class="w-full lg:w-8/12">
              <input name="form_name" class="w-full Form-Item-Input bg-transparent" type="text" placeholder="山田太郎" required>
            </dd>
          </dl>
          <dl class="flex flex-wrap lg:flex-nowrap items-left w-full Form-Item">
            <dt class="w-full mb-4 lg:mb-0 lg:w-4/12">
              COMPANY
            </dt>
            <dd class="w-full lg:w-8/12">
              <input name="form_company_name" class="w-full Form-Item-Input bg-transparent" type="text" placeholder="株式会社〇〇">
            </dd>
          </dl>
          <dl class="flex flex-wrap lg:flex-nowrap items-left w-full Form-Item">
            <dt class="w-full mb-4 lg:mb-0 lg:w-4/12">
              E-MAIL
              <span class="Form-Item-Label-Required">
                  *
                </span>
            </dt>
            <dd class="w-full lg:w-8/12">
              <input name="form_mail" class="w-full Form-Item-Input bg-transparent" type="email" placeholder="example@gmail.com" required>
            </dd>
          </dl>
          <dl class="flex flex-wrap lg:flex-nowrap items-left w-full Form-Item">
            <dt class="w-full mb-4 lg:mb-0 lg:w-4/12">
              MESSAGE
              <span class="Form-Item-Label-Required">
                  *
                </span>
            </dt>
            <dd class="w-full lg:w-8/12 ">
              <input name="form_message" class="w-full Form-Item-Textarea bg-transparent" placeholder="お問い合わせ内容" required>
            </dd>
          </dl>
          <div class="text-center pt-48 pb-56">
            <button type="submit" class="button1 mx-auto">
              <div class="button1__wrapper"></div>
              <div class="button1__box">確認する</div>
            </button>
          </div>
        </form>
      </div>
<?php get_footer(); ?>