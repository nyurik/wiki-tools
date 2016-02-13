<?php
    require '../../lib/vendor/autoload.php';
    require '../../lib/class-hay.php';
    require '../../lib/class-templaterenderer.php';

    $hay = new Hay("propbrowse");
    $hay->header();
?>
<style>
    #wrapper {
        max-width: inherit;
    }

    th {
        text-decoration: underline;
    }

    th:hover {
        cursor: pointer;
        color: navy;
    }

    .flexrow {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
    }
</style>
<div>
    <div class="flexrow">
        <h1><?php $hay->title(); ?></h1>

        <a href="props.json" download class="btn btn-primary">Download as JSON</a>
    </div>

    <p class="lead"><?php $hay->description(); ?></p>

    <p>Click on the column headers to sort by that column.</p>

    <table class="table">
        <thead>
            <tr>
                <th data-sort="wikidataid">ID</th>
                <th data-sort="string">Label</th>
                <th data-sort="string">Description</th>
                <th data-sort="string">Use</th>
                <th data-sort="string">Type</th>
                <th data-sort="string">Aliases</th>
                <th data-sort="string">Example</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require 'props.html';
        ?>
        </tbody>
    </table>
</div>
<?php
    $hay->footer();
?>