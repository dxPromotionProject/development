<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div id="registerCompleteTitle">
    <h1>会員登録完了</h1>
    <h2>New member registration complete</h2>
</div>

<div class="member_register_complete">
    <div class="member_register_complete_inner">
        <h2>会員登録完了いたしました！</h2>
        <h2>お手数ですが下記リンクより、登録した情報にて</h2>
        <h2>再度ログインをお願いいたします。</h2>

        <div class="register_complete_button">
        <div id="register_complete_inner_button">
            <!-- <button name="submit" type="submit" value="会員登録する（無料）" class="bottons"> -->
            <a href="<?php echo home_url('login'); ?>">ログインページへ</a>
        </div>
    </div>
    </div>
</div>


<?php get_template_part('includes/footer'); ?>