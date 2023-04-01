<div class="frm">

    <div class="comments-inner">

        <?php
        wp_list_comments(array(
            'avatar_size' => 100,
            'style'       => 'ol',
            'short_ping'  => true,
        ));
        ?>



    </div><!-- .comments-inner -->




    <!-- FORM -->
    <?php
    $field = array(
        'author' => '<div class = " boxRow "><p class="frmTittle">名前<span class="req">*</span></p><p class="frmIn"><input type="text" name="name"></p></div>',
        'email' => '<div class="boxRow">
        <p class="frmTittle">メールアドレス<span class="req">*</span></p>
        <p class="frmIn"><input type="email" name="mail"></p></div>',
        'url' => '<div class="boxRow">
        <p class="frmTittle">サイト</p>
        <p class="frmIn"><input type="text" name="url"></p>
    </div>',
        'cookie' => ''



    );

    ?>



    <div class="form">


        <form action="" method="post">
            <?php
            if (comments_open()) {
                comment_form(
                    array(
                        'fields' => $field,
                        'comment_field' => '<div class="boxRow">
                    <p class="frmTittle">コメント</p>
                    <p class="frmIn"><textarea name="message"></textarea></p>
                </div>',
                        'submit_button' => '<p class="submit"><input type="submit" class="submit" value="コメントを送信"></p>',
                        'comment_notes_before' => '<p class="textAu">メールアドレスが公開されることはありません。<span class="req">*</span>が付いている欄は必須項目です</p>',
                        'title_reply' => '',
                        'title_reply_before' => '<p class="author">コメントを残す</p>'




                    )
                );
            }

            ?>

        </form>
    </div>
    <!-- FORM -->



</div>