<?php
require("page.php");

class ServicesPage extends Page {
    private $row2Buttons = array(
        "Re-engineering" => "reengineering.php",
        "Standards Compliance" => "standards.php",
        "Buzzword Compliance" => "buzzword.php",
        "Mission Statements" => "mission.php"
    );

    public function Display() {
        echo "<html>\n<head>\n";
        $this->displayTitle();
        $this->displayKeywords();
        $this->displayStyles();
        echo "</head>\n<body>\n";
        $this->displayHeader();
        $this->displayMenu($this->buttons);
        $this->displayMenu($this->row2Buttons);
        echo $this->content;
        $this->displayFooter();
        echo "</body>\n</html>\n";
    }
}

$services = new ServicesPage();

$services->content="<p>At TLA Consulting, we offer a number of services. Perhaps the productivity fo you employees would improve if we re-engineered your business. Maybe all your business needs is a fresh mission statement, or a new batch of buzzwords.</p>";

$services->display();

?>

