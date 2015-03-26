<form action="#" method="POST">
    <div class="form-group">
        <label for="post-title">Post Title</label>
        <input type="text" class="form-control" id="post-title" placeholder="Post title" name="title">
    </div>
    <div class="form-group">
        <label for="post-description">Post Description</label>
        <textarea class="form-control" id="post-description" cols="30" rows="2" name="description" placeholder="Some post description"></textarea>
    </div>
    <div class="form-group">
        <label for="post-content">Post Content</label>
        <textarea class="form-control" id="post-content" cols="30" rows="8" name="content" placeholder="The main post content"></textarea>
    </div>
    <div class="form-group">
        <label for="post-status">Post Status</label>
        <select class="form-control" id="post-status" name="status">
            <option value="0" selected>Draft</option>
            <option value="1">Published</option>
            <option value="2">Archived</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default pull-right">Submit</button>
</form>