<?php 
class UserDashboard extends Controller {
    function Show() {
        $this->view('UserDashboardView', []);
    }
}
?>