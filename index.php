<?php
	include "header.php"
?>

<?php
	include "includes/simplepie.inc";
	include "includes/idn/idna_convert.class.php";
?>


		<div>
			<div class="news-entry">

                    <div class="newsblock">
                      <h2><a href="http://alian.info" title="Blog o informačných technológiách (IT), mobilných zariadeniach, programovaní, internete, software, hardware a tak trochu aj o živote, názoroch, politike, hudbe a štýle."><b>alian.info</b></a></h2>
                      <ul>
												<?php $feed01 = new SimplePie('http://feeds.feedburner.com/Alianinfo/'); ?>
												<?php foreach ($feed01->get_items(0, 10) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><a href="http://planet.opensoft.sk/" title="Slovenská a česká komunita okolo free software. Obsah blogov nie je tematicky vyhranený"><b>SK/CZ</b> free software community</a></h2>
                      <ul>
												<?php $feed02 = new SimplePie('http://planet.opensoft.sk/rss20.xml'); ?>
												<?php foreach ($feed02->get_items(0, 10) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <a href="http://feeds.feedburner.com/linuxAI"><img src="http://linux.alian.info/images/rss.gif" border="0" align="right" alt="RSS" /></a>

                    <div style="clear:both"></div>

                    <div class="newsblock">
                      <h2><img src="http://linuxos.sk/favicon.ico" style="height:16px;width16px;" border="0" /> <a href="http://linuxos.sk/" title="LinuxOS.sk plní úlohu informačného portálu, denne prináša novinky zo sveta Linuxu, open-source a IT, odborné články týkajúce sa linuxového softvéru a distribúcií, bezpečnosti či konfigurácie"><b>linuxOS.sk</b> - články</a></h2>
                      <ul>
												<?php $feed03 = new SimplePie('http://linuxos.sk/clanok_rss/index.html'); ?>
												<?php foreach ($feed03->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><img src="http://linuxos.sk/favicon.ico" style="height:16px;width16px;" border="0" /> <a href="http://linuxos.sk/" title="LinuxOS.sk plní úlohu informačného portálu, denne prináša novinky zo sveta Linuxu, open-source a IT, odborné články týkajúce sa linuxového softvéru a distribúcií, bezpečnosti či konfigurácie"><b>linuxOS.sk</b> - správičky</a></h2>
                      <ul>
												<?php $feed04 = new SimplePie('http://linuxos.sk/spravy_rss/index.html'); ?>
												<?php foreach ($feed04->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><img src="http://linuxos.sk/favicon.ico" style="height:16px;width16px;" border="0" /> <a href="http://linuxos.sk/" title="LinuxOS.sk plní úlohu informačného portálu, denne prináša novinky zo sveta Linuxu, open-source a IT, odborné články týkajúce sa linuxového softvéru a distribúcií, bezpečnosti či konfigurácie"><b>linuxOS.sk</b> - fórum</a></h2>
                      <ul>
												<?php $feed05 = new SimplePie('http://linuxos.sk/forum_rss/index.html'); ?>
												<?php foreach ($feed05->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul><br />

											<div id="bo">
                        Dnes je <?php echo date("d. m. Y",time()) ?>. Aktuálna verzia kernelu je
                        <b> <?php $feed06 = new SimplePie('http://www.kernel.org/kdist/rss.xml'); ?>
												<?php foreach ($feed06->get_items(3, 1) as $item): ?>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												<?php endforeach; ?>
												    </b> a stiahnuť si ju môžete na <a href="http://www.kernel.org/" >The Linux Kernel Archives</a>
                    	</div>
                    </div>

                    <div style="clear:both"></div>

                    <div class="newsblock">
                      <h2><img src="http://abclinuxu.cz/images/site2/favicon.png" border="0" /> <a href="http://abclinuxu.cz" title="abclinuxu.cz - Linux na stříbrném podnose"><b>abclinuxu.cz</b> - články</a></h2>
                      <ul>
												<?php $feed07 = new SimplePie('http://www.abclinuxu.cz/auto/abc.rss'); ?>
												<?php foreach ($feed07->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><img src="http://abclinuxu.cz/images/site2/favicon.png" border="0" /> <a href="http://abclinuxu.cz" title="abclinuxu.cz - Linux na stříbrném podnose"><b>abclinuxu.cz</b> - správičky</a></h2>
                      <ul>
												<?php $feed08 = new SimplePie('http://www.abclinuxu.cz/auto/zpravicky.rss'); ?>
												<?php foreach ($feed08->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><img src="http://abclinuxu.cz/images/site2/favicon.png" border="0" /> <a href="http://abclinuxu.cz" title="abclinuxu.cz - Linux na stříbrném podnose"><b>abclinuxu.cz</b> - blogy</a></h2>
                      <ul>
												<?php $feed09 = new SimplePie('http://www.abclinuxu.cz/auto/blogDigest.rss'); ?>
												<?php foreach ($feed09->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div style="clear:both"></div>

                    <div class="newsblock">
                      <h2><img src="http://i.iinfo.cz/r2/favicon.ico" border="0" /> <a href="http://www.root.cz" title="Root.cz - linux, open source a free software"><b>root.cz</b> - články</a></h2>
                      <ul>
												<?php $feed10 = new SimplePie('http://rss.root.cz/clanky/'); ?>
												<?php foreach ($feed10->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><img src="http://i.iinfo.cz/r2/favicon.ico" border="0" /> <a href="http://www.root.cz" title="Root.cz - linux, open source a free software"><b>root.cz</b> - správičky</a></h2>
                      <ul>
												<?php $feed11 = new SimplePie('http://rss.root.cz/zpravicky/'); ?>
												<?php foreach ($feed11->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div class="newsblock">
                      <h2><img src="http://i.iinfo.cz/r2/favicon.ico" border="0" /> <a href="http://www.root.cz" title="Root.cz - linux, open source a free software"><b>root.cz</b> - blogy</a></h2>
                      <ul>
												<?php $feed12 = new SimplePie('http://rss.root.cz/blogy/'); ?>
												<?php foreach ($feed12->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                    <div style="clear:both"></div>

                    <div class="newsblock">
                      <h2><img src="http://www.linuxexpres.cz/favicon.ico" border="0" /> <a href="http://www.root.cz" title="Software, hardware, recenze, návody - Linux E X P R E S"><b>linuxexpres.cz</b></a></h2>
                      <ul>
												<?php $feed13 = new SimplePie('http://www.linuxexpres.cz/rss/clanky'); ?>
												<?php foreach ($feed13->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                  <div class="newsblock">
                      <h2><img src="http://www.linuxsoft.cz/img/favicon.ico" border="0" /> <a href="http://www.linuxsoft.cz" title="Linux Software"><b>linuxsoft.cz</b></a></h2>
                      <ul>
												<?php $feed14 = new SimplePie('http://linuxsoft.cz/export/linuxsoft_article_cz.xml'); ?>
												<?php foreach ($feed14->get_items(0, 5) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

									<div class="newsblock">
	                      <h2><img src="http://www.openoffice.cz/favicon.ico" border="0" /> <a href="http://www.openoffice.cz/" title="OpenOffice.cz  | Oficiální portál kancelářkého balíku OpenOffice.org"><b>openoffice.cz</b></a></h2>
	                      <ul>
									 				<?php $feed15 = new SimplePie('http://www.openoffice.cz/rss/clanky'); ?>
									 				<?php foreach ($feed15->get_items(0, 5) as $item): ?>
									 				    <li>
									 				        <a href="<?php print $item->get_permalink(); ?>">
									 				        <?php print $item->get_title(); ?></a>
									 				    </li>
									 				<?php endforeach; ?>
									 			</ul>
	                     </div>

                 <div style="clear:both"></div>

 							 <h6>distribúcie</h6>
                 <div class="newsblock">
                  <h5><a href="http://fedora.cz" title="fedora.cz"><b>fedora.cz</b></a></h5>
                  <ul>
										<?php $feed16 = new SimplePie('http://fedora.cz/feed/'); ?>
										<?php foreach ($feed16->get_items(0, 3) as $item): ?>
										    <li>
										        <a href="<?php print $item->get_permalink(); ?>">
										        <?php print $item->get_title(); ?></a>
										    </li>
										<?php endforeach; ?>
									</ul>
                </div>

                    <div class="newsblock">
                      <h5><a href="http://www.linux-mint-czech.cz/" title="Linux Mint CZ&amp;SK"><b>linux-mint-czech.cz</b></a></h5>
                      <ul>
												<?php $feed17 = new SimplePie('http://www.linux-mint-czech.cz/feed/'); ?>
												<?php foreach ($feed17->get_items(0, 3) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                  <div class="newsblock">
                      <h5><a href="http://www.opensuse.cz" title="SUSE Linux Portal | Vše, co potřebujete pro váš SUSE Linux"><b>opensuse.cz</b></a></h5>
                      <ul>
												<?php $feed18 = new SimplePie('http://www.opensuse.cz/node/feed'); ?>
												<?php foreach ($feed18->get_items(0, 3) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                        <div style="clear:both"></div>

               <h6>open-source</h6>
                  <div class="newsblock">
                      <h5><a href="http://www.drupal.sk/" title="Slovenská Drupal komunita"><b>drupal.sk</b></a></h5>
                      <ul>
												<?php $feed19 = new SimplePie('http://www.drupal.sk/node/feed'); ?>
												<?php foreach ($feed19->get_items(0, 3) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
											</ul>
                    </div>

                 <div class="newsblock">
                  <h5><a href="http://wp.sk/" title="WordPress Slovensko"><b>wp.sk</b></a></h5>
                  <ul>
										<?php $feed20 = new SimplePie('http://wp.sk/feed/'); ?>
										<?php foreach ($feed20->get_items(0, 3) as $item): ?>
										    <li>
										        <a href="<?php print $item->get_permalink(); ?>">
										        <?php print $item->get_title(); ?></a>
										    </li>
										<?php endforeach; ?>
									</ul>
                </div>

                 <div class="newsblock">
                  <h5><a href="http://www.zdrojak.cz/" title="Zdroják - o tvorbě webových stránek a aplikací"><b>zdrojak.cz</b></a></h5>
                  <ul>
										<?php $feed21 = new SimplePie('https://www.zdrojak.cz/feed/'); ?>
										<?php foreach ($feed21->get_items(0, 3) as $item): ?>
									    <li>
									      <a href="<?php print $item->get_permalink(); ?>">
									      <?php print $item->get_title(); ?></a>
									    </li>
									 	  <?php endforeach; ?>
                  </ul>
                </div>

              <div style="clear:both"></div>

               <h6>blogy</h6>
                <div class="newsblock">
                  <h5><a href="http://www.bibri.net/" title="Detaily dělají dokonalou práci"><b>bibri.net</b></a></h5>
                  <ul>
										<?php $feed22 = new SimplePie('http://www.bibri.net/feed/'); ?>
											<?php foreach ($feed22->get_items(0, 3) as $item): ?>
												<li>
											  	<a href="<?php print $item->get_permalink(); ?>">
											    <?php print $item->get_title(); ?></a>
											  </li>
												<?php endforeach; ?>
                      </ul>
                </div>



                <div style="clear:both"></div>

                 <div class="newsblock">
                        <h5><a href="http://penguin.cz/" title="Neziskový server pro podporu Linuxu, UNIXu a free-software"><b>penguin.cz</b></a></h5>
                        <ul>
												<?php $feed23 = new SimplePie('http://www.penguin.cz/rss.php'); ?>
												<?php foreach ($feed23->get_items(0, 3) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
                        </ul>
                </div>

                 <div class="newsblock">
                        <h5><a href="http://www.jariq.sk/" title="Brloh tvora menom jariq"><b>jariq.sk</b></a></h5>
                        <ul>
														<?php $feed24 = new SimplePie('http://www.jariq.sk/xml-rss2.php'); ?>
														<?php foreach ($feed24->get_items(0, 3) as $item): ?>
														    <li>
														        <a href="<?php print $item->get_permalink(); ?>">
														        <?php print $item->get_title(); ?></a>
														    </li>
												<?php endforeach; ?>
                        </ul>
                </div>

                 <div class="newsblock">
                        <h5><a href="http://datastory.cz" title="datastory.cz"><b>datastory.cz</b></a></h5>
                        <ul>
												<?php $feed25 = new SimplePie('http://datastory.cz/feed'); ?>
												<?php foreach ($feed25->get_items(0, 3) as $item): ?>
												    <li>
												        <a href="<?php print $item->get_permalink(); ?>">
												        <?php print $item->get_title(); ?></a>
												    </li>
												<?php endforeach; ?>
                        </ul>
                </div>

								<div class="newsblock">
											 <h5><a href="http://blog.frantovo.cz" title="blog.frantovo.cz"><b>blog.frantovo.cz</b></a></h5>
											 <ul>
											 <?php $feed26 = new SimplePie('http://blog.frantovo.cz/agregace/c/?f=rss'); ?>
											 <?php foreach ($feed26->get_items(0, 3) as $item): ?>
													 <li>
															 <a href="<?php print $item->get_permalink(); ?>">
															 <?php print $item->get_title(); ?></a>
													 </li>
											 <?php endforeach; ?>
											 </ul>
							 </div>

							 <div class="newsblock">
											<h5><a href="http://heronovo.cz" title="heronovo.cz"><b>heronovo.cz</b></a></h5>
											<ul>
											<?php $feed27 = new SimplePie('http://www.heronovo.cz/feed/'); ?>
											<?php foreach ($feed27->get_items(0, 3) as $item): ?>
													<li>
															<a href="<?php print $item->get_permalink(); ?>">
															<?php print $item->get_title(); ?></a>
													</li>
											<?php endforeach; ?>
											</ul>
							</div>

							<div style="clear:both"></div>

							<div class="newsblock">
										 <h5><a href="http://joysfera.blogspot.com" title="hjoysfera.blogspot.com"><b>joysfera.blogspot.com</b></a></h5>
										 <ul>
										 <?php $feed28 = new SimplePie('http://joysfera.blogspot.com/feeds/posts/default'); ?>
										 <?php foreach ($feed28->get_items(0, 3) as $item): ?>
												 <li>
														 <a href="<?php print $item->get_permalink(); ?>">
														 <?php print $item->get_title(); ?></a>
												 </li>
										 <?php endforeach; ?>
										 </ul>
						 </div>

						 <div class="newsblock">
										<h5><a href="http://blog.ok1cdj.com" title="blog.ok1cdj.com"><b>blog.ok1cdj.com</b></a></h5>
										<ul>
										<?php $feed29 = new SimplePie('http://blog.ok1cdj.com/feeds/posts/default'); ?>
										<?php foreach ($feed29->get_items(0, 3) as $item): ?>
												<li>
														<a href="<?php print $item->get_permalink(); ?>">
														<?php print $item->get_title(); ?></a>
												</li>
										<?php endforeach; ?>
										</ul>
						</div>

						<div class="newsblock">
									 <h5><a href="http://blog.eischmann.cz" title="blog.eischmann.cz"><b>blog.eischmann.cz</b></a></h5>
									 <ul>
									 <?php $feed30 = new SimplePie('http://blog.eischmann.cz/feed/'); ?>
									 <?php foreach ($feed30->get_items(0, 3) as $item): ?>
											 <li>
													 <a href="<?php print $item->get_permalink(); ?>">
													 <?php print $item->get_title(); ?></a>
											 </li>
									 <?php endforeach; ?>
									 </ul>
					 </div>

					 <div style="clear:both"></div>

			</div>
		</div>

<?php
	include "footer.php"
?>
