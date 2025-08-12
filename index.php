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

        <div class="row my-5">
            <div class="col-md-4">
                <p class="text-white bg-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris elementum magna ut tortor fermentum, a vehicula libero ultricies. Nam vel vehicula eros, sed
                    vulputate mauris.
                    Proin at magna vitae enim consequat finibus. Maecenas in rhoncus purus.
                    Nulla congue molestie interdum. Duis vel dictum risus. Aenean placerat arcu eget suscipit elementum.
                </p>
            </div>
            <div class="col-md-4">
                <p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
</body>