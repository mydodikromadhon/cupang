<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('pages/_partial/header')?>
    </head>
    <body>
        <?php $this->load->view('pages/_partial/navbar')?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php $this->load->view('pages/_partial/sidebar')?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                  <br>
                   <?php $this->load->view($main)?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                  <?php $this->load->view('pages/_partial/footer')?>
                </footer>
            </div>
        </div>
        <?php $this->load->view('pages/_partial/script')?>
    </body>
</html>
