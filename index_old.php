<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codelis - Home</title>

    <?php
    include("links.php");
    ?>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <div class="body container">

        <h1>Codelis Bootstrap Test Site</h1>

        <div class="row my-5">
            <div class="col-md-4">
                <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                    vulputate mauris.
                    Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                    Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
                </p>
            </div>
            <div class="col-md-4">
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                    vulputate mauris.
                    Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                    Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
                </p>
            </div>
            <div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                vulputate mauris.
                Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
            </div>
        </div>

        <div class="row my-5">
            <div class="col-sm-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                vulputate mauris.
                Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
            </div>
            <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                vulputate mauris.
                Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
            </div>
            <div class="col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                vulputate mauris.
                Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
            </div>
        </div>

        <div class="row my-5">
            <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                vulputate mauris.
                Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
            </div>
            <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                vulputate mauris.
                Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
            </div>
        </div>

        <h2>Tables</h2>
        <div class="row my-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h2>Images</h2>
        <div class="row my-5">
            <img src="/pics/square.jpg" alt="square" class="rounded-circle img-fluid">
            <img src="/pics/square.jpg" alt="square" class="rounded">
            <img src="/pics/square.jpg" alt="square" class="img-thumbnail">
        </div>


        <h2>Button Groups</h2>
        <div class="row my-5">
            <div class="btn-group btn-group-md">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
            </div>
            <div class="btn-group-vertical btn-group-lg">
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
            </div>

            <div class="btn-group-vertical btn-group-sm">
                <a href="#" class="btn btn-success">Link Button</a>
                <button type="button" class="btn btn-success">Button</button>
                <input type="button" class="btn btn-success" value="Input Button">
            </div>
        </div>

        <h2>Badges</h2>
        <div class="row my-5">
            <h3>example text with <span class="badge bg-secondary">Secondary</span> badge.</h3>
            <h3>example text with <span class="badge bg-primary">Primary</span> badge.</h3>
            <h3>example text with <span class="badge bg-success">Success</span> badge.</h3>
        </div>

        <h2>Progress Bar</h2>
        <div class="row my-5">
            <div class="progress">
                <div class="progress-bar" style="width:79%">79%</div>
            </div>
        </div>

        <h2>Spinners</h2>
        <div class="row my-5">
            <div class="spinner-border text-primary"></div>
            <br>
            <div class="spinner-grow text-primary"></div>
            <br>
            <div class="spinner-border spinner-border-sm"></div>
            <br>
            <div class="spinner-grow spinner-grow-sm"></div>
            <br>

            <div col-sm-4>
                <button class="btn btn-primary">
                    <span class="spinner-border spinner-border-sm"></span>
                    Loading..
                </button>
            </div>

        </div>

        <h2>List Groups</h2>

        <div class="row my-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item disabled">disabled item</li>
                <li class="list-group-item list-group-item-action" href="#">Second item</li>
                <li class="list-group-item list-group-item-action" href="#">Third item</li>
            </ul>
        </div>

        <h2>Cards</h2>

        <div class="row my-5">
            <div class="card" style="width: 400px">
                <img class="card-img-top" src="pics/img_avatar1.png" alt="image of person">

                <div class="card-body">
                    <h3 class="card-title">That one guy</h3>
                    <p class="card-text">Literally that one guy who always has to be right.</p>
                    <a href="" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        </div>

        <h2>Dropdowns</h2>

        <div class="row my-5">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Link 1</a></li>
                    <li><a class="dropdown-item" href="#">Link 2</a></li>
                    <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
            </div>

            <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">Apple</button>
                <button type="button" class="btn btn-primary">Samsung</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown">Sony</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tablet</a></li>
                        <li><a class="dropdown-item" href="#">Smartphone</a></li>
                    </ul>
                </div>
            </div>

            <pre>
                some
                random
                text
                so That
                I don't need to
                test with
                CSS
            </pre>

        </div>

        <h2>Modal</h2>

        <div class="row my-5">
            <p>Click on the button to open the modal.</p>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                Open modal
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalFull">
                Open fullscreen modal
            </button>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        Modal body..
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="myModalFull">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        Modal body..
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <h2>Tooltip</h2>

        <div class="row my-5">
            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Hooray!"
                data-bs-placement="bottom">
                Hover over me!
            </button>
        </div>

        <h2>Popover</h2>

        <div class="row my-5">
            <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover Header"
                data-bs-trigger="focus" data-bs-content="Some content inside the popover">Toggle popover</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover Header"
                data-bs-trigger="hover" data-bs-content="Some content inside the popover">Hover popover</button>
        </div>

        <h2>Toast</h2>

        <div class="row my-5">
            <div class="toast show">
                <div class="toast-header">
                    Toast Header
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    Some text inside the toast body
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="toastbtn">Show Toast</button>
        </div>

        <h2>Boostrap Variables</h2>

        <div class="row my-5 border border-top-0">
            <p id="p-color"> This is a test to see if the colour variables work. <br> It still bugs me that that its
                spelt the American way and not colour.</p>
        </div>




        <?php
        include("index_script.php");
        ?>
</body>