<?php

$servername = "mysql";
$username = "u124324806_dWIHT";
$password = "6HvoHlnNV2";
$dbname = "u124324806_xyXXW";


try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$sql = "	
		SELECT wp_posts.id
		     , wp_posts.post_title
		     , (SELECT guid
		        FROM wp_posts
		        WHERE id = wp_postmeta.meta_value) AS                                                          imagem
		     , guid                                AS                                                          link
		     , post_content
		     , CASE WHEN post_excerpt = '' OR NULL THEN CONCAT(LEFT(post_content, 200), '[...]') ELSE post_excerpt END resumo
		     , (SELECT group_concat(wp_terms.name separator ', ')
		        FROM wp_terms
		                 INNER JOIN wp_term_taxonomy on wp_terms.term_id = wp_term_taxonomy.term_id
		                 INNER JOIN wp_term_relationships wpr on wpr.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
		        WHERE taxonomy = 'category'
		          and wp_posts.ID = wpr.object_id
		)                                                                                                      categoria
		
		FROM wp_posts
		         JOIN wp_postmeta ON wp_postmeta.post_id = wp_posts.id
		WHERE wp_posts.post_status = 'publish'
		  AND wp_posts.post_type = 'post'
		  AND wp_postmeta.meta_key = '_thumbnail_id'
		ORDER BY wp_posts.post_date DESC
		LIMIT 4;	
	";

	foreach ( $conn->query( $sql ) as $row ) {
		?>
        <article>
            <a href="<?php print $row['link']; ?>" target="_blank"><img src="<?php print $row['imagem']; ?>"></a>
            <a href="<?php print $row['link']; ?>" target="_blank"><h3><?php print $row['categoria']; ?></h3></a>
            <a href="<?php print $row['link']; ?>" target="_blank"><h1><?php print $row['post_title']; ?></h1></a>
            <a href="<?php print $row['link']; ?>" target="_blank"><p><?php print $row['resumo']; ?></p></a>
        </article>
	<?php }


} catch ( PDOException $e ) {
//	echo "Connection failed: " . $e->getMessage();
	echo "Erro ao se conectar no banco de dados do blog Economia Circular.";
}
?>