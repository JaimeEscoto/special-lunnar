<?php

include "getPhotoPostByPhotoLink.php";
$mostLikedPhotoLinks = include 'getMostLikedPhotoLinks.php';
//echo $mostLikedPhotoLinks;
while ($row = mysqli_fetch_array($mostLikedPhotoLinks)) {
    //echo $row['qty'].$row['photoLink'];
    $result = getPhotoPostByPhotoLink($row['photoLink']);
    $photoURL = $result->graphql->shortcode_media->display_resources[0]->src;
    //$photoURL = $result->graphql->shortcode_media->display_resources[0]->src;
    $photoCaption = $result->graphql->shortcode_media->edge_media_to_caption->edges[0]->node->text;
    //$likesPeople =$result->graphql->shortcode_media->edge_media_preview_like->edges;
    //$commentsPeople = $result->graphql->shortcode_media->edge_media_to_comment->edges;
    $username=$result->graphql->shortcode_media->owner->username; ?>

    <div class="item">
      <div class="animate-box bounceIn animated">
        <a href="<?php echo  $photoURL; ?>" class="image-popup fh5co-board-img"
          title="<?php echo  $photoCaption; ?>"><img src="<?php echo  $photoURL ?>" alt="Free HTML5 Bootstrap template"></a>
      </div>
      <div class="fh5co-desc">
        <table>
          <tr>
            <td>
              <div class="qty<?php echo $row['photoLink'] ?>" >
                <p>
                  <input width="60%" type="image" src="images/like.png" onclick="setLikeToPhoto('<?php echo $row['photoLink']; ?>','qty<?php echo $row['photoLink'] ?>')" style="float: left;">
                  <h5><rr id="qty<?php echo $row['photoLink'] ?>"> <?php echo $row['qty'] ?></rr></h5>
                </p>
              </div>
            </td>
            <td>
              <div class="lovecolor<?php echo $row['photoLink'] ?>">
                <p>
                  <input width="100%" type="image" src="images/lovecolor.png" onclick="setSuperLike('<?php echo $username; ?>','<?php echo $row['photoLink']; ?>')" style="float: rigth;">
                </p>
              </div>
            </td>
            <td>
              <div class="colors<?php echo $row['photoLink'] ?>">
                <p>
                  <input width="60%" type="image" src="images/colors.png" onclick="goToSearch()"  style="float: rigth;">
                </p>
              </div>
            </td>
          </tr>
        </table>
        <strong><u>@<?php echo $username; ?></u></strong>
        <?php  echo  $photoCaption; ?>
      </div>
    </div>
<xxppxxpp>
  <?php
}
