<div class="inner">
    <header>
        <h1>Booble.com</h1>
        <p>List of Employees</p>
    </header>
    <section class="tiles">
        <?php foreach ($employees as $employee){
            loadTemplate('templates.employees',$employee);
        }
        ?>
    </section>
</div>