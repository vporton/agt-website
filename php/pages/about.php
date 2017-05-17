<?php

require_once("php/page.php");
require_once("php/comments.php");
require_once("php/statistics.php");
require_once("php/general.php");

class AboutPage extends Page {
  public function getMain() {
    $value = "";

    $value .= "<h2>About</h2>";
    $value .= "<p>The AGT project was started by an independent researcher <a href='http://portonvictor.org'>Victor Porton</a> as a LaTeX-format book</a>.</p>";
    $value .= "<p>The book presents a new research topic, a very general generalization of general topology, particularly topology expressed in terms of so called <q>funcoids</q>, <q>reloids</q>, and their generalizations. Reloid is essencially just a filter on a cartesian product of two sets. For a definition of funcoids see the body of the book.</p>";
    $value .= "<p>In May 2017 Victor Porton started to rewrite his book in a format proposed by <a href='http://stacks.math.columbia.edu/'>Stacks Project</a>.</p>";

    $value .= "<h2><a href='" . href("acknowledgements") . "'>Acknowledgements</a></h2>";
    $value .= "<p>We have a page <a href='" . href("acknowledgements") . "'>acknowledging support</a>.";

    $value .= "<h2>The AGT project, its website, and tools</h2>";
    $value .= "<p>There are currently three open source repositories tracking development for the AGT project and its website:</p>";
    $value .= "<ol>";
    $value .= "<li>The LaTeX files making up the AGT project itself can be found <a href='https://github.com/vporton/agt-book'>here</a>.";
    $value .= "<li>The website is being developed as a <a href='https://github.com/vporton/agt-website'>separate project</a>.";
    $value .= "<li>There is a <a href='https://github.com/stacks/stacks-tools'>repository</a> containing tools and infrastructure used by both the project and the website.";
    $value .= "</ol>";
    $value .= "<p>If you wish to start your own project, inspired by the Stacks project we hope the combination of these projects can serve as a starting point. If you have any questions about this, please do not hesitate to send an email to <a href='mailto:stacks.project@gmail.com'>stacks.project@gmail.com</a>.";

    $value .= "<h2><a href='" . href("api") . "'>API</a></h2>";
    $value .= "<p>You can query the Stacks project through an <a href='" . href("api") . "'><abbr title='Application Programming Interface'>API</abbr></a>.";

    return $value;
  }
  public function getSidebar() {
    $value = "";

    $value .= getRecentChanges();
    $value .= getRecentBlogposts();
    $value .= getCommentsSidebar($this->db);
    $value .= getStatisticsSidebar($this->db);

    return $value;
  }
  public function getTitle() {
    return " &mdash; About";
  }
}

?>
