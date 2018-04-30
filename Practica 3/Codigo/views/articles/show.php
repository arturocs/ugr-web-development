<div class="main">
    <div class="article">
        <h1><?php echo $article->titulo; ?></h1>
        <p class="date"><?php echo $article->fecha; ?></p>
        <div class="img-container">
            <a href="<?php echo $article->imagenes; ?>"><img src="<?php echo $article->imagenes; ?>" alt=""></a>
            <p><?php echo $article->pie_imagen ?></p>
        </div>
        <p class="description">
            <?php echo $article->contenido; ?>
        </p>
        <?php $comment_list = Comment::find($article->id); ?>

        <!-- Botones de interaccion -->
        <button class="article-button" type="button" onclick="showComments();"><span id="num-comments"><?php echo count($comment_list) ?></span> comentarios</button>
        <a href="?option=print&item=<?php echo $article->id; ?>"><button class="article-button" type="button">Imprimir artículo</button></a>
        <!-- Bloque de comentarios -->
        <div class="comments-block" id="comments-block">
            <h2>Comentarios</h2>
            <!-- Informacion sobre el autor -->
            <div class="author-info" id="author-box">
                <img id="author-info-avatar" src="views/img/avatar/david.jpg" alt="avatar del autor">
                <h3 id="author-info-name">David Vargas</h3>
                <p id="author-info-subtitle">Usuario registrado</p>
                <button id="author-info-close" class="close" onclick="showInfoBox();">Cerrar</button>
            </div>
            <div id="comment-list">
            <!-- Lista de comentarios -->
            <?php
               // $comment_list = Comment::find($article->id);
                $comment_num = 1;

                foreach($comment_list as $comment) { ?>
                    <div class="comment" id="comment-<?php echo $comment_num ?>">
                        <div class="profile-img">
                            <img id="comment-avatar" src=views/img/avatar/<?php echo $comment->imagen; ?>  alt="avatar" onclick="showInfoBox(1, '<?php echo $comment->nombre; ?>', '<?php echo $comment->imagen; ?>');">
                        </div>
                        <div class="comment-text">
                            <p class="comment-author">#<span id="comment-number"><?php echo $comment_num ?></span> <span id="author-name" onclick="showInfoBox(1, '<?php echo $comment->nombre; ?>', '<?php echo $comment->imagen; ?>');"><?php echo $comment->nombre; ?></span><!-- : --></p>
                            <p class="comment-content" id="comment-content"><?php echo $comment->contenido; ?></p>
                            <p class="comment-date">A las <?php echo $comment->hora; ?> el dia <?php echo $comment->fecha; ?></p>
                        </div>

                    </div>
            <?php $comment_num += 1;
                } ?>
            </div>
            <!-- Nuevo comentario -->
            <div class="profile-img">
                <img src="views/img/avatar/avatar.png" alt="avatar">
            </div>
            <form class="comment-form">
                <textarea class="new-comment-text" id="comment-field" name="comment" onkeypress="banWords(event);" onfocusout="censorBeep();" placeholder="Introduce tu comentario..."></textarea>
                <input class="new-comment-name" id="name-field" type="text" placeholder="Nombre">
                <input class="new-comment-email" id="email-field" type="email" placeholder="Correo electrónico">
                <input class="new-comment-button" id="comment-button" type="button" onclick="addComment();" value="Comentar">
            </form>
        </div>
    </div>
</div>
