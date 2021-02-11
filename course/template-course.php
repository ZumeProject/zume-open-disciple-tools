<?php
declare(strict_types=1);

$url = dt_get_url_path();
$dt_post_type = explode( "/", $url )[0];

dt_please_log_in();

if ( ! current_user_can( 'access_contacts' ) ) {
    wp_die( esc_html( "Permission denied" ), "Permission denied", 403 );
}

get_header();

?>
    <div style="padding:15px" class="template-metrics-wide dashboard-page">

        <div id="inner-content">

            <div class="grid-x grid-padding-x">
                <div class="cell medium-9">
                    <div class="grid-x grid-padding-x grid-padding-y">

                        <!-- main section -->
                        <div class="cell">
                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="bordered-box">

                                        <div class="tabs-panel is-active" id="panel1">

                                            <div class="grid-x grid-padding-x grid-padding-y">

                                                <div class="cell small padding-top-0 padding-bottom-0" id="display-buttons">
                                                    <button id="column_button" type="button" class="button hollow tiny" onclick="toggle_column()">Single Column</button>
                                                    <button id="extra_button" type="button" class="button hollow tiny" onclick="toggle_extra()">Show Session Plan</button>
                                                </div>

                                                <!-- Session 1 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 1</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 1 )" class="button primary-button-hollow" id="start_session_1">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra" style="display:none;">
                                                            Prayer, Overview                                    </div>

                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/god-uses-ordinary-people/">God Uses Ordinary People</a>

                                                            <br><p class="t-description">You'll see how God uses ordinary people doing simple things to make a big impact.</p>
                                                        </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>

                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/definition-of-disciple-and-church/">Simple Definition of Disciple and Church</a>

                                                            <p class="t-description">Discover the essence of being a disciple, making a disciple, and what is the church.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>

                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/spiritual-breathing-is-hearing-and-obeying-god/">Spiritual Breathing is Hearing and Obeying God</a>
                                                            <p class="t-description">Being a disciple means we hear from God and we obey God.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>

                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/soaps-bible-reading/">SOAPS Bible Reading</a>
                                                            <p class="t-description">A tool for daily Bible study that helps you understand, obey, and share God’s Word.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>

                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/accountability-groups/">Accountability Groups</a>
                                                            <p class="t-description">A tool for two or three people of the same gender to meet weekly and encourage each other in areas that are going well and reveal areas that need correction.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>

                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Accountability groups                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            45 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 2 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 2</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 2 )" class="button primary-button-hollow" id="start_session_2">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/consumer-vs-producer-lifestyle/">Consumer vs Producer Lifestyle</a>
                                                            <p class="t-description">You'll discover the four main ways God makes everyday followers more like Jesus.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/how-to-spend-an-hour-in-prayer/">How to Spend an Hour in Prayer</a>
                                                            <p class="t-description">See how easy it is to spend an hour in prayer.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Prayer Cycle                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            60 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Discuss - Prayer Cycle                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/relational-stewardship-list-of-100/">Relational Stewardship – List of 100</a>
                                                            <p class="t-description">A tool designed to help you be a good steward of your relationships.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Create List of 100                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            30 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 3 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 3</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 3 )" class="button primary-button-hollow" id="start_session_3">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/the-kingdom-economy/">The Kingdom Economy</a>
                                                            <p class="t-description">Learn how God's economy is different from the world's. God invests more in those who are faithful with what they've already been given.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Discuss - Should every disciple share?                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/the-gospel-and-how-to-share-it/">The Gospel and How to Share It</a>
                                                            <p class="t-description">Learn a way to share God’s Good News from the beginning of humanity all the way to the end of this age.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Sharing the Gospel                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            45 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/baptism-and-how-to-do-it/">Baptism and How To Do It</a>
                                                            <p class="t-description">Jesus said, “Go and make disciples of all nations, BAPTIZING them in the name of the Father and of the Son and of the Holy Spirit…” Learn how to put this into practice.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 4 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 4</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 4 )" class="button primary-button-hollow" id="start_session_4">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/prepare-your-3-minute-testimony/">Prepare Your 3-Minute Testimony</a>
                                                            <p class="t-description">Learn how to share your testimony in three minutes by sharing how Jesus has impacted your life.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Share your testimony                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            45 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/vision-casting-the-greatest-blessing/">Vision Casting the Greatest Blessing</a>
                                                            <p class="t-description">Learn a simple pattern of making not just one follower of Jesus but entire spiritual families who multiply for generations to come.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/duckling-discipleship-leading-sooner/">Duckling Discipleship – Leading Immediately</a>
                                                            <p class="t-description">Learn what ducklings have to do with disciple-making.</p>
                                                        </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/eyes-to-see-where-the-kingdom-isnt/">Eyes to See Where The Kingdom Isn’t</a>
                                                            <p class="t-description">Begin to see where God’s Kingdom isn’t. These are usually the places where God wants to work the most.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/the-lords-supper-and-how-to-lead-it/">The Lord’s Supper and How To Lead It</a>
                                                            <p class="t-description">It’s a simple way to celebrate our intimate connection and ongoing relationship with Jesus. Learn a simple way to celebrate.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Lord's Supper                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            10 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 5 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 5</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 5 )" class="button primary-button-hollow" id="start_session_5">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/prayer-walking/">Prayer Walking and How To Do It</a>
                                                            <p class="t-description">It’s a simple way to obey God’s command to pray for others. And it's just what it sounds like — praying to God while walking around!</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/a-person-of-peace-and-how-to-find-one/">A Person of Peace and How To Find One</a>
                                                            <p class="t-description">Learn who a person of peace might be and how to know when you've found one.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/the-bless-prayer-pattern/">The BLESS Prayer Pattern</a>
                                                            <p class="t-description">Practice a simple mnemonic to remind you of ways to pray for others.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - BLESS Prayer                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Prayer Walking                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            90 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 6 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 6</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 6 )" class="button primary-button-hollow" id="start_session_6">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/faithfulness-is-better-than-knowledge/">Faithfulness is Better Than Knowledge</a>
                                                            <p class="t-description">It's important what disciples know — but it's much more important what they DO with what they know.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/3-3-group-meeting-pattern/">3/3 Group Meeting Pattern</a>
                                                            <p class="t-description">A 3/3 Group is a way for followers of Jesus to meet, pray, learn, grow, fellowship and practice obeying and sharing what they've learned. In this way, a 3/3 Group is not just a small group but a Simple Church.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            75 min                                    </div>

                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 7 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 7</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 7 )" class="button primary-button-hollow" id="start_session_7">Start</a>
                                                        </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/training-cycle-for-maturing-disciples/">Training Cycle for Maturing Disciples</a>
                                                            <p class="t-description">Learn the training cycle and consider how it applies to disciple making.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - 3/3 Group                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            90 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Discuss - 3/3 Group Experience                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            10 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 8 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 8</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 8 )" class="button primary-button-hollow" id="start_session_8">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/leadership-cells/">Leadership Cells</a>
                                                            <p class="t-description">A Leadership Cell is a way someone who feels called to lead can develop their leadership by practicing serving.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - 3/3 Group                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            90 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 9 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 9</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 9 )" class="button primary-button-hollow" id="start_session_9">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/expect-non-sequential-growth/">Expect Non-Sequential Growth</a>
                                                            <p class="t-description">See how disciple making doesn't have to be linear. Multiple things can happen at the same time.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/pace-of-multiplication-matters/">Pace of Multiplication Matters</a>
                                                            <p class="t-description">Multiplying matters and multiplying quickly matters even more. See why pace matters.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/always-part-of-two-churches/">Always Part of Two Churches</a>
                                                            <p class="t-description">Learn how to obey Jesus' commands by going AND staying.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/three-month-plan/" rel="“nofollow”">Three-Month Plan                                            (login required)</a><br>
                                                            <p class="t-description">Create and share your plan for how you will implement the Zúme tools over the next three months.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Create 3-Month Plan                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            60 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Discuss - Share 3-Month Plan with group                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            20 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>

                                                <!-- Session 10 -->
                                                <div class="cell small-12 large-6 session">
                                                    <div class="grid-x grid-padding-x">
                                                        <div class="cell medium-9 overview-title"><h2>Session 10</h2></div>
                                                        <div class="cell medium-3 start">
                                                            <a onclick="open_session( 10 )" class="button primary-button-hollow" id="start_session_10">Start</a>
                                                        </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Check-in, Prayer, Overview                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/coaching-checklist/">Coaching Checklist</a>
                                                            <p class="t-description">A powerful tool you can use to quickly assess your own strengths and vulnerabilities when it comes to making disciples who multiply.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Coaching Checklist Self-Assessment                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            10 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/leadership-in-networks/">Leadership in Networks</a>
                                                            <p class="t-description">Learn how multiplying churches stay connected and live life together as an extended, spiritual family.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/peer-mentoring-groups/">Peer Mentoring Groups</a>
                                                            <p class="t-description">This is a group that consists of people who are leading and starting 3/3 Groups. It also follows a 3/3 format and is a powerful way to assess the spiritual health of God’s work in your area.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/four-fields-tool/">Four Fields Tool</a>
                                                            <p class="t-description">The four fields diagnostic chart is a simple tool to be used by a leadership cell to reflect on the status of current efforts and the kingdom activity around them.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell medium-10">
                                                            <a href="https://zume.training/generational-mapping/">Generational Mapping</a>
                                                            <p class="t-description">Generation mapping is another simple tool to help leaders in a movement understand the growth around them.</p>
                                                        </div>
                                                        <div class="cell medium-2 t-length hide-extra">
                                                            15 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - 3/3 Peer Mentoring                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            60 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Four Fields                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            10 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Practice - Generation Mapping                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            10 min                                    </div>
                                                        <div class="cell small-9 medium-10 t-activities hide-extra">
                                                            Looking Forward                                    </div>
                                                        <div class="cell small-3 medium-2 t-length hide-extra">
                                                            5 min                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- left section-->
                <div class="cell medium-3" style="padding-top:.6em;">

                    <div style="display: flex">
                        <div style="flex-grow: 1; overflow: hidden; white-space: nowrap; text-overflow: ellipsis">
                            <button class="button secondary-button expanded">Get a Coach</button>
                        </div>
                    </div>


                </div> <!-- right section-->
            </div>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->


<?php
get_footer();
