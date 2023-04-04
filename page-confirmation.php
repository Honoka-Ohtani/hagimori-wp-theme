<?php get_header(); ?>
<!-- confirmation page -->
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
#main{
  background-color: rgba(255, 255, 255, 0.8);
   -webkit-backdrop-filter: blur(10px);
backdrop-filter: blur(10px); 
}
  </style>
<div class="Form">
        <div class="confirm-message">
            <p class="confirm-message__text">
                以下の内容で送信します
            </p>
        </div>
        <form action="<?php echo home_url('thanks/'); ?>" method="post">
            <dl class="flex flex-wrap lg:flex-nowrap items-center w-full confirmation_Form-Item Form-top">
                <dt class="w-full mb-4 lg:mb-0 lg:w-4/12 pl-8">
                    NAME
                </dt>
                <dd class="w-full lg:w-8/12">
                    <p class="w-full pl-8 confirmation_Form-Item-Input bg-transparent">
                        <?php echo htmlspecialchars($_POST['form_name']); ?>
                        <input type="hidden" name="form_name" value="<?php echo htmlspecialchars($_POST['form_name']); ?>">
                    </p>
                </dd>
            </dl>
            <dl class="flex flex-wrap lg:flex-nowrap items-center w-full confirmation_Form-Item">
                <dt class="w-full mb-4 lg:mb-0 lg:w-4/12 pl-8">
                    COMPANY
                </dt>
                <dd class="w-full lg:w-8/12">
                    <p class="w-full pl-8 confirmation_Form-Item-Input bg-transparent">
                        <?php echo htmlspecialchars($_POST['form_company_name']); ?>
                        <input type="hidden" name="form_company_name" value="<?php echo htmlspecialchars($_POST['form_company_name']); ?>">
                    </p>
                </dd>
            </dl>
            <dl class="flex flex-wrap lg:flex-nowrap items-center w-full confirmation_Form-Item">
                <dt class="w-full mb-4 lg:mb-0 lg:w-4/12 pl-8">
                    E-MAIL
                </dt>
                <dd class="w-full lg:w-8/12">
                    <p class="w-full pl-8 confirmation_Form-Item-Input bg-transparent">
                        <?php echo htmlspecialchars($_POST['form_mail']); ?>
                        <input type="hidden" name="form_mail" value="<?php echo htmlspecialchars($_POST['form_mail']); ?>">
                    </p>
                </dd>
            </dl>
            <dl class="flex flex-wrap lg:flex-nowrap items-center w-full confirmation_Form-Item">
                <dt class="w-full mb-4 lg:mb-0 lg:w-4/12 pl-8">
                    MESSAGE
                </dt>
                <dd class="w-full lg:w-8/12">
                    <p class="w-full pl-8 confirmation_Form-Item-Input bg-transparent">
                        <?php echo htmlspecialchars($_POST['form_message']); ?>
                        <input type="hidden" name="form_message" value="<?php echo htmlspecialchars($_POST['form_message']); ?>">
                    </p>
                </dd>
            </dl>
            <div class="text-center pt-48 pb-56">
                <button type="submit" class="button1 mx-auto">
                    <div class="button1__wrapper"></div>
                    <div class="button1__box ">送信</div>
                </button>
            </div>
        </form>
    </div>
<?php get_footer(); ?>
