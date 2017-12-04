<div class="item">
  <div class="animate-box">
    <a href="{$photoURL}" class="image-popup fh5co-board-img"
      title="{$caption}"><img src="{$photoURL}" alt="Free HTML5 Bootstrap template"></a>
  </div>
  <div class="fh5co-desc">
    <table>
      <tr>
        <td>
          <div class="qty{$photoLink}" >
            <p>
              <input width="60%" type="image" src="images/like.png" onclick="setLikeToPhoto('{$photoLink}','qty{$photoLink}')" style="float: left;">
              <h5><rr id="qty{$photoLink}"> {$qty}</rr></h5>
            </p>
          </div>
        </td>
        <td>
          <div class="lovecolor{$photoLink}">
            <p>
              <input width="100%" type="image" src="images/lovecolor.png" onclick="setSuperLike('{$username}','{$photoLink}')" style="float: rigth;">
            </p>
          </div>
        </td>
        <td>
          <div class="colors{$photoLink}">
            <p>
              <input width="60%" type="image" src="images/colors.png" onclick="goToSearch()"  style="float: rigth;">
            </p>
          </div>
        </td>
      </tr>
    </table>
    <strong><u>@{$username}</u></strong>
    {$caption}
  </div>
</div>
