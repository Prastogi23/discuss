<div class="container">
    <h2 class="heading">Ask a Question</h2>
    <form action="./server/requests.php" method="post">
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="input" name="title" class="form-control" id="title">
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea  name="description" class="form-control" id="description"></textarea>
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" name="category" id="category" >
                <option value="">Mobile</option>
                <option value="">General</option>
                <option value="">Coding</option>
            </select>
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>    
    </form>
</div>