<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: post-loop-6
 * title: Posts loop grid simple
 * categories: NeveFSE
 * keywords: posts, loop, blog, feed, rows, list
 */

return array(
	'title'      => __( 'Posts loop grid simple', 'neve-fse' ),
	'categories' => array( 'neve-fse', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog', 'feed', 'rows', 'list' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":3} /-->

<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg-alt"} -->
<p class="has-text-align-center has-ti-bg-alt-background-color has-background">No Posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"textTransform":"none"}}} /-->

<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"textTransform":"none"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
		',
);
