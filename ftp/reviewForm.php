<!-- reviewForm.php -->
<div class="reviewContainer">
    <h1>Leave a comment (without stopping playback)</h1>
    <form id="form" method="post">
        <div style="display: inline-flex;">
            <fieldset class="rating">
                <input type="radio" id="star1" name="stars" value="5"><label for="star1" title="5 stars">star</label>
                <input type="radio" id="star2" name="stars" value="4"><label for="star2" title="4 stars">star</label>
                <input type="radio" id="star3" name="stars" value="3"><label for="star3" title="3 stars">star</label>
                <input type="radio" id="star4" name="stars" value="2"><label for="star4" title="2 stars">star</label>
                <input type="radio" id="star5" name="stars" value="1"><label for="star5" title="1 star">star</label>
            </fieldset>
        </div>
        <div>
            <textarea name="comments" id="comments" rows="12" cols="40" required></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>

    <div class="reviewFeedback" id="review-feedback"></div>
</div>