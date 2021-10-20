<?php
function works_create_post_type() {
  register_post_type( 'works', [
    'labels' => [
      'name'          => '制作実績',
      'singular_name' => 'works',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    'supports'      => ['title', 'thumbnail']
  ]);
}
add_action( 'init', 'works_create_post_type' );

// *************** worksのカスタムフィールド ***************
add_theme_support( 'post-thumbnails',['works']);  // サムネイルの追加

// 固定カスタムフィールドボックス
function add_works_fields() {
  add_meta_box( 'works_setting', '制作実績詳細', 'works_fields', 'works', 'normal');  // add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
}
add_action('admin_menu', 'add_works_fields');

// カスタムフィールドの入力エリア
function works_fields() {
  global $post;
  //管理画面に表示される入力エリア
  //「get_post_meta()」は現在入力されている値を表示するための記述
  echo 'URL<br><input type="text" name="works_url" value="'.get_post_meta($post->ID, 'works_url', true).'" style="width:100%;margin-bottom:20px;" required />';
}

// カスタムフィールドの値を保存
function save_works_fields( $post_id ) {
  if(!empty($_POST['works_url'])){  // URLが入力されている場合
    update_post_meta($post_id, 'works_url', $_POST['works_url'] ); //値を保存
  } else {  // URL未入力の場合
    delete_post_meta($post_id, 'works_url'); //値を削除
  }
}
add_action('save_post', 'save_works_fields');
// *************** worksのカスタムフィールド ***************

?>
