<div id="difftables">
    <main class="container-lg">
        <div id="main-box">
            <?php require('components/modals/create-difftable.php'); ?>
            <nav class="navbar-expand page-icons page-icons-right page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="#!" class="page-icon" title="Create table" data-bs-toggle="modal" data-bs-target="#create-difftable-modal">
                        <div class="page-icon-box">
                            <i class="fas fa-plus"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Tables</h1>


            <section id="difftables-section">
                <table id="difftables-table" class="data-table table">
                    <thead>
                        <tr>
                            <th title="Table name">Name</th>
                            <th title="Input modes in the table charts">Modes</th>
                            <th title="Chart count">Charts</th>
                            <th title="Plays over all charts">Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=difftables_difftable_index">Table1</a></td>
                            <td>7K</td>
                            <td>20</td>
                            <td>115</td>
                        </tr>
                        <tr>
                            <td><a href="?a=difftables_difftable_index">Table1</a></td>
                            <td>7K</td>
                            <td>20</td>
                            <td>115</td>
                        </tr>
                        <tr>
                            <td><a href="?a=difftables_difftable_index">Table1</a></td>
                            <td>7K</td>
                            <td>20</td>
                            <td>115</td>
                        </tr>
                        <tr>
                            <td><a href="?a=difftables_difftable_index">Table1</a></td>
                            <td>7K</td>
                            <td>20</td>
                            <td>115</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Table name">Name</th>
                            <th title="Input modes in the table charts">Modes</th>
                            <th title="Chart count">Charts</th>
                            <th title="Plays over all charts">Plays</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>
