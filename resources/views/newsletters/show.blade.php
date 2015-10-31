<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<!-- If you delete this meta tag, the ground will open and swallow you. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Elite Programmers Club Newsletter</title>

<style>
    <?php include base_path().'/public/assets/css/email.css'; ?>
</style>

</head>

<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#999999">
    <tr>
        <td></td>
        <td class="header container" align="">

            <!-- /content -->
            <div class="content">
                <table bgcolor="#999999" >
                    <tr>
                        <td>
                            <h6 class="collapse">Elite Programmers Club</h6>
                        </td>
                        <td align="right">
                            <p class="">{{ date('l dS F Y') }}</p>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /HEADER -->

<!-- BODY -->
<table class="body-wrap" bgcolor="">
    <tr>
        <td></td>
        <td class="container" align="" bgcolor="#FFFFFF">

            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td>
                            <h3>Hello @if(isset($subscriber)){{ $subscriber->last_name}}@endif,</h3>
                            <p class="lead">
                                Welcome to the {{ ordinal($newsletter->issue_number) }} edition of of the Elite Programmers Club newsletter.
                            </p>

                            <!-- A Real Hero (and a real human being) -->
                            <p><img src="{{ $newsletter->header_image }}" /></p><!-- /hero -->
                            <p>The Elite Programmers club is a community of programmers from every level with the expressed purpose of developing the computer programming skills of its members.</p>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <div class="content">
                <h3>Resources</h3>
            </div>
            <!-- content -->
            <div class="content">

                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;"><img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/1446277945SublimeText_Master_012312_icon.png" /></td>
                        <td>
                            <h4>Material Design Theme</h4>
                            <p class="">Material Theme, the most epic theme for Sublime Text 3 which brings the <a href="http://www.google.com/design/">Material Design</a> visual language to your Sublime Text 3.</p>
                            <a  href="https://github.com/equinusocio/material-theme" class="btn">Get &raquo;</a>
                        </td>
                    </tr>
                </table>

            </div><!-- /content -->


            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;"><img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/discount.jpg" /></td>
                        <td>
                            <h4>Discounts for Students</h4>
                            <p class="">This is list of discounts on software (SaaS, PaaS, IaaS, etc.) and other offerings for developers who happen to be students. </p>
                            <a href="https://github.com/najela/discount-for-student-dev" class="btn">Get &raquo;</a>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;"><img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/daily-programmer.png" /></td>
                        <td>
                            <h4>Daily Programmer</h4>
                            <p class="">Dailyprogrammer is about challenging programmers of all skill level with weekly programming challenges. Solutions are peer reviewed and you can ask for the community for feedback.</p>
                            <a href="https://www.reddit.com/r/dailyprogrammer/" class="btn">Get &raquo;</a>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;"><img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/Git-Logo-2Color.png" /></td>
                        <td>
                            <h4>Git Goodies</h4>
                            <p class="">Git Goodies is a wrapper for the git commands that you run all the time; a wrapper that adds functionality and is aesthetically pleasing.</p>
                            <a href="https://github.com/qw3rtman/gg" class="btn">Get &raquo;</a>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;"><img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/awesome.png" /></td>
                        <td>
                            <h4>A curated list of awesome lists</h4>
                            <p class="">This is a list of resources which can help you in programming, database administration as well as links to free programming books</p>
                            <a href="https://github.com/sindresorhus/awesome" class="btn">Get &raquo;</a>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->


            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td>

                            <!-- Callout Panel -->
                            <p class="callout">If you are looking for a group of talented programmers which you can join to easily grasp improve your programming skills? <a href="http://eliteprogrammersclub.cf/">Join Us Now! &raquo;</a>	</p><!-- /callout panel -->

                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <div class="content">
                <h3>Upcomming Events</h3>
            </div>
            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;">
                            <img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/devfest.png" />
                        </td>
                        <td>
                            <h4>Devfest Fako 2015 <small>16th November</small></h4>
                            <p class="">Devfest Fako 2015 is a Hackweek of product development which aims at getting developers from the South Western area of Cameroon to employ Google’s technologies such as Android, Material Design, AngularJS, Firebase and Polymer to build the GDG Limbe website, radically improving the GDG Buea website and the Hi-vote Android app</p>
                            <a class="btn" href="https://www.eventbrite.co.uk/e/devfest-fako-2015-tickets-19328363656">More Info &raquo;</a>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <div class="content">
                <h3>Conclusion</h3>
            </div>
            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td class="small" width="20%" style="vertical-align: top; padding-right:10px;">
                            <img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/epc.png" />
                        </td>
                        <td>
                            <h4>Call for Contributors</h4>
                            <p class="">Help make this newsletter awesome by contributing content. Please feel free to e-mail us any article you feel we should add to this newsletter at <a href="emailto:support@eliteprogrammersclub.cf">support@eliteprogrammersclub.cf</a></p>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <div class="content ending-salutation">
                <h5>
                    Until next time, Happy Coding
                    <img src="https://s3-eu-west-1.amazonaws.com/eliteprogrammersclub.cf/cool.png" />
                </h5>
            </div>

            <!-- content -->
            <div class="content">
                <table bgcolor="">
                    <tr>
                        <td>

                            <!-- social & contact -->
                            <table bgcolor="" class="social" width="100%">
                                <tr>
                                    <td>

                                        <!--- column 1 -->
                                        <div class="column">
                                            <table bgcolor="" cellpadding="" align="left">
                                        <tr>
                                            <td>

                                                <h5 class="">Connect with Us:</h5>
                                                <p class="">
                                                    <a href="https://www.facebook.com/Elite-Programming-Club-313905705385639/timeline/" class="soc-btn fb">Facebook</a>
                                                    <a href="https://twitter.com/ProgrammersClub" class="soc-btn tw">Twitter</a>
                                                    <a href="https://plus.google.com/communities/113143130405334959284" class="soc-btn gp">Google+</a></p>


                                            </td>
                                        </tr>
                                    </table><!-- /column 1 -->
                                        </div>

                                        <!--- column 2 -->
                                        <div class="column">
                                            <table bgcolor="" cellpadding="" align="left">
                                        <tr>
                                            <td>

                                                <h5 class="">Contact Info:</h5>
                                                <p>
                                                    <strong><a href="emailto:support@eliteprogrammersclub.cf">support@eliteprogrammersclub.cf</a></strong>
                                                </p>

                                            </td>
                                        </tr>
                                    </table><!-- /column 2 -->
                                        </div>

                                        <div class="clear"></div>

                                    </td>
                                </tr>
                            </table><!-- /social & contact -->

                        </td>
                    </tr>
                </table>
            </div><!-- /content -->


        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">

                <!-- content -->
                <div class="content">
                    <table>
                        <tr>
                            <td align="center">
                                <p>
                                    <a href="http://www.gnu.org/copyleft/fdl.html">Terms</a> |
                                    <a href="http://eliteprogrammersclub.cf/constitution.html">Policy</a>
                                     @if(isset($unsubscribeUrl)) |
                                        <a href="{{ $unsubscribeUrl }}">
                                            <unsubscribe>Unsubscribe</unsubscribe>
                                        </a>
                                    @endif
                                </p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /FOOTER -->

</body>
</html>
