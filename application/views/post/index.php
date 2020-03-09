<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <h1>Post Page</h1>
        <form class="user" method="post" action="<?= base_url('post'); ?>">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Judul.." value="<?= set_value('title'); ?>">
               
            </div>
            <div class="form-group textarea">
                <input type="textarea" class="form-control form-control-textarea" id="article" name="article" placeholder="Tulis Artikel">
                
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Post
            </button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
<!-- Include Quill stylesheet -->
<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">

<!-- Create the toolbar container -->
<div class="toolbar">
                <span class="ql-formats">
                  <select class="ql-header">
                    <option value="1">Heading</option>
                    <option value="2">Subheading</option>
                    <option selected>Normal</option>
                  </select>
                  <select class="ql-font">
                    <option selected>Sailec Light</option>
                    <option value="sofia">Sofia Pro</option>
                    <option value="slabo">Slabo 27px</option>
                    <option value="roboto">Roboto Slab</option>
                    <option value="inconsolata">Inconsolata</option>
                    <option value="ubuntu">Ubuntu Mono</option>
                  </select>
                </span>
                <span class="ql-formats">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-list" value="ordered"></button>
                  <button class="ql-list" value="bullet"></button>
                  <select class="ql-align">
                    <option label="left" selected></option>
                    <option label="center" value="center"></option>
                    <option label="right" value="right"></option>
                    <option label="justify" value="justify"></option>
                  </select>
                </span>
                <span class="ql-formats">
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                  <button class="ql-video"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-formula"></button>
                  <button class="ql-code-block"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-clean"></button>
                </span>
              </div>

<!-- Create the editor container -->
<div id="editor">
  <p>Hello World!</p>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var editor = new Quill('#editor', {
    modules: { toolbar: '#toolbar' },
    theme: 'snow'
  });
</script>