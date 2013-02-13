<?php
/**
* Menu page for the s2Member plugin (Logs page).
*
* Copyright: © 2009-2011
* {@link http://www.websharks-inc.com/ WebSharks, Inc.}
* (coded in the USA)
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package s2Member\Menu_Pages
* @since 130210
*/
if(realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"]))
	exit("Do not access this file directly.");

if(!class_exists("c_ws_plugin__s2member_menu_page_logs"))
	{
		/**
		* Menu page for the s2Member plugin (Integrations page).
		*
		* @package s2Member\Menu_Pages
		* @since 110531
		*/
		class c_ws_plugin__s2member_menu_page_logs
			{
				public function __construct()
					{
						echo '<div class="wrap ws-menu-page">'."\n";

						echo '<div id="icon-plugins" class="icon32"><br /></div>'."\n";
						echo '<h2>s2Member® Logs (for Debugging Purposes)</h2>'."\n";

						echo '<table class="ws-menu-page-table">'."\n";
						echo '<tbody class="ws-menu-page-table-tbody">'."\n";
						echo '<tr class="ws-menu-page-table-tr">'."\n";
						echo '<td class="ws-menu-page-table-l">'."\n";

						do_action("ws_plugin__s2member_during_logs_page_before_left_sections", get_defined_vars());

						if(apply_filters("ws_plugin__s2member_during_logs_page_during_left_sections_display_log_settings", true, get_defined_vars()))
							{
								do_action("ws_plugin__s2member_during_logs_page_during_left_sections_before_log_settings", get_defined_vars());

								echo '<div class="ws-menu-page-group" title="s2Member® Logging Configuration (for Debugging Purposes)">'."\n";
								echo '<div class="ws-menu-page-section ws-plugin--s2member-log-settings-section">'."\n";

								echo '<h3>s2Member® Logging Configuration (for Debugging Purposes)</h3>'."\n";
								do_action("ws_plugin__s2member_during_logs_page_during_left_sections_during_log_settings", get_defined_vars());

								echo '<form method="post" name="ws_plugin__s2member_options_form" id="ws-plugin--s2member-options-form">' . "\n";
								echo '<input type="hidden" name="ws_plugin__s2member_options_save" id="ws-plugin--s2member-options-save" value="' . esc_attr (wp_create_nonce ("ws-plugin--s2member-options-save")) . '" />' . "\n";

								echo '<table class="form-table">' . "\n";
								echo '<tbody>' . "\n";
								echo '<tr>' . "\n";

								echo '<th>'."\n";
								echo '<label for="ws-plugin--s2member-gateway-debug-logs">'."\n";
								echo 'Enable Logging Routines?'."\n";
								echo '</label>'."\n";
								echo '</th>'."\n";

								echo '</tr>'."\n";
								echo '<tr>'."\n";

								echo '<td>'."\n";
								echo '<input type="radio" name="ws_plugin__s2member_gateway_debug_logs" id="ws-plugin--s2member-gateway-debug-logs-0" value="0"'.((!$GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["gateway_debug_logs"]) ? ' checked="checked"' : '').' /> <label for="ws-plugin--s2member-gateway-debug-logs-0">No</label> &nbsp;&nbsp;&nbsp; <input type="radio" name="ws_plugin__s2member_gateway_debug_logs" id="ws-plugin--s2member-gateway-debug-logs-1" value="1"'.(($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["gateway_debug_logs"]) ? ' checked="checked"' : '').' /> <label for="ws-plugin--s2member-gateway-debug-logs-1">Yes, enable debugging w/ API, IPN &amp; Return Page logging (and List Server API logs too).</label><br />'."\n";
								echo '<em>This enables logging overall. Includes s2Member® HTTP, API, IPN and Return Page logging. Also logs any List Server integrations.</em>'."\n";
								echo '</td>'."\n";

								echo '</tr>'."\n";
								echo '<tr>' . "\n";

								echo '<th>'."\n";
								echo '<label for="ws-plugin--s2member-gateway-debug-logs-extensive">'."\n";
								echo 'Enable Additional Logging Routines?'."\n";
								echo '</label>'."\n";
								echo '</th>'."\n";

								echo '</tr>'."\n";
								echo '<tr>'."\n";

								echo '<td>'."\n";
								echo '<input type="radio" name="ws_plugin__s2member_gateway_debug_logs_extensive" id="ws-plugin--s2member-gateway-debug-logs-extensive-0" value="0"'.((!$GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["gateway_debug_logs_extensive"]) ? ' checked="checked"' : '').' /> <label for="ws-plugin--s2member-gateway-debug-logs-extensive-0">No</label> &nbsp;&nbsp;&nbsp; <input type="radio" name="ws_plugin__s2member_gateway_debug_logs_extensive" id="ws-plugin--s2member-gateway-debug-logs-extensive-1" value="1"'.(($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["gateway_debug_logs_extensive"]) ? ' checked="checked"' : '').' /> <label for="ws-plugin--s2member-gateway-debug-logs-extensive-1">Yes, enable debugging w/ HTTP connection logging for ALL of WordPress®.</label><br />'."\n";
								echo '<em>This enables HTTP connection logging for ALL of WordPress® (quite extensive).<br />* Creates the additional log file: <code>wp-http-api-debug.log</code><br />* This should NEVER be enabled on a live site.</em>'."\n";
								echo '</td>'."\n";

								echo '</tr>'."\n";
								echo '</tbody>' . "\n";
								echo '</table>' . "\n";

								echo '<p class="submit" style="margin-top:20px;">'."\n";
								echo '<input type="submit" class="button-primary" value="Update Logging Configuration" />'."\n";
								echo '</p>' . "\n";

								echo '</form>'."\n";

								echo '</div>'."\n";
								echo '</div>'."\n";

								do_action("ws_plugin__s2member_during_logs_page_during_left_sections_after_log_settings", get_defined_vars());
							}

						if(apply_filters("ws_plugin__s2member_during_logs_page_during_left_sections_display_logs", true, get_defined_vars()))
						{
							do_action("ws_plugin__s2member_during_logs_page_during_left_sections_before_logs", get_defined_vars());

							echo '<div class="ws-menu-page-group" title="s2Member® Log Viewer (for Debugging Purposes)" default-state="open">'."\n";

							echo '<div class="ws-menu-page-section ws-plugin--s2member-logs-section">'."\n";
							echo '<h3>s2Member® Log Viewer (for Debugging Purposes)</h3>'."\n";

							echo '<form method="post" onsubmit="if(!confirm(\'Archive all existing log files?\n\nAll of your current log files will be archived (e.g. they will simply be renamed with an ARCHIVED tag &amp; date in their file name); and new log files will be created automatically the next time s2Member® logs something on your installation.\n\nPlease click OK to confirm this action.\')) return false;">'."\n";
							echo '<input type="hidden" name="ws_plugin__s2member_logs_archive_start_fresh" value="'.esc_attr(wp_create_nonce ("ws-plugin--s2member-logs-archive-start-fresh")).'" />'."\n";
							echo '<input type="submit" value="Archive All Current Log Files" class="ws-menu-page-right ws-plugin--s2member-archive-logs-start-fresh-button" style="clear:right; min-width:200px;" />'."\n";
							echo '</form>'."\n";

							echo '<form method="post" onsubmit="if(!confirm(\'Delete all existing log files?\n\nThis will permanently delete ALL of your existing log files (including any archived log files).\n\nPlease click OK to confirm this action.\')) return false;">'."\n";
							echo '<input type="hidden" name="ws_plugin__s2member_logs_delete_start_fresh" value="'.esc_attr(wp_create_nonce ("ws-plugin--s2member-logs-delete-start-fresh")).'" />'."\n";
							echo '<input type="submit" value="Permanently Delete All Log Files" class="ws-menu-page-right ws-plugin--s2member-delete-logs-start-fresh-button" style="clear:right; min-width:200px;" />'."\n";
							echo '</form>'."\n";

							echo '<form method="post">'."\n";
							echo '<input type="hidden" name="ws_plugin__s2member_logs_download_zip" value="'.esc_attr(wp_create_nonce ("ws-plugin--s2member-logs-download-zip")).'" />'."\n";
							echo '<input type="submit" value="Download All Log Files (Zip File)" class="ws-menu-page-right ws-plugin--s2member-logs-download-zip-button" style="clear:right; min-width:200px;" />'."\n";
							echo '</form>'."\n";

							echo '<p><span class="ws-menu-page-hilite">s2Member® keeps a log of ALL of its communication with Payment Gateways. If you are having trouble, please review your log files below.</span></p>'."\n";
							echo '<p><strong>Debugging Tips:</strong> &nbsp;&nbsp; It is normal to see a few errors in your log files. This is because s2Member® logs ALL of its communication with Payment Gateways. Everything — not just successes. With that in mind, there will be some failures that s2Member® expects (to a certain extent); and s2Member® deals with these gracefully. What you\'re looking for here, are things that jump right out at you as being a major issue (e.g. when s2Member® makes a point of providing details to you in a log entry about problems that should be corrected on your installation). Please read carefully.</p>'."\n";
							echo '<p><strong>Test Transaction Tips:</strong> &nbsp;&nbsp; Generally speaking, it is best to run test transactions for yourself. Then review the log file entries pertaining to your transaction. Does s2Member® report any major issues? If so, please read through any details that s2Member® provides in the log file. If you need assistance, please <a href="http://www.s2member.com/quick-s.php" target="_blank" rel="external">search s2Member.com</a> for answers to common questions.</p>'."\n";
							echo '<p><strong>Important Note:</strong> &nbsp;&nbsp; It is normal to have a <code>paypay-ipn.log</code> and/or a <code>paypay-rtn.log</code> file at all times. Ultimately, all Payment Gateway integrations supported by s2Member® pass through it\'s core PayPal® processors; even if you\'ve integrated with another Payment Gateway. If you are having trouble, and you don\'t find any errors in your Payment Gateway log files, please check the <code>paypay-ipn.log</code> and <code>paypay-rtn.log</code> files too. Regarding s2Member® Pro Forms... If you\'ve integrated s2Member® Pro Forms, you will NOT have a <code>paypay-rtn.log</code> file, because that particular processor is not used with Pro Form integrations. However, you will have a <code>paypay-ipn.log</code> file, and you will need to make a point of inspecting this file to ensure there were no post-processing issues.</p>'."\n";
							echo '<p style="font-style:italic;"><strong>Archived Log Files:</strong> &nbsp;&nbsp; All s2Member® log files are stored here: <code>'.esc_html(c_ws_plugin__s2member_utils_dirs::doc_root_path($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["logs_dir"])).'</code>. Any log files that contain the word <code>ARCHIVED</code> in their name, are files that reached a size of more than 2MB, so s2Member® archived them automatically to prevent any single log file from becoming too large. Archived log file names will also contain the date/time they were archived by s2Member®. These archived log files typically contain much older (and possibly outdated) log entries.</p>'."\n";

							do_action("ws_plugin__s2member_during_logs_page_during_left_sections_during_logs", get_defined_vars());

							$log_file_options = ""; // Initialize to an empty string.
							$view_log_file = (!empty($_POST["ws_plugin__s2member_log_file"])) ? esc_html($_POST["ws_plugin__s2member_log_file"]) : "";
							$logs_dir = $GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["logs_dir"];

							if(is_dir($logs_dir)) // Do we have a logs directory on this installation?
							{
								$log_files = scandir($logs_dir); sort($log_files, SORT_STRING);

								$log_file_options .= '<optgroup label="Current Log Files">';
								foreach($log_files as $log_file) // Build options for each current log file.
								{
									if(preg_match("/\.log$/", $log_file) && stripos($log_file, "-ARCHIVED-") === FALSE)
										$log_file_options .= '<option data-type="current" value="'.esc_attr($log_file).'"'.(($view_log_file === $log_file) ? ' style="font-weight:bold;" selected="selected"' : '').'>'.esc_html($log_file).'</option>';
								}
								$log_file_options .= '</optgroup>';

								if(stripos($log_file_options, '<option data-type="current"') === FALSE)
									$log_file_options .= '<option value="" disabled="disabled">— No current log files yet. —</option>';

								$log_file_options .= '<option value="" disabled="disabled"></option>';

								$log_file_options .= '<optgroup label="Archived Log Files">';
								foreach($log_files as $log_file) // Build options for each ARCHIVED log file.
								{
									if(preg_match("/\.log$/", $log_file) && stripos($log_file, "-ARCHIVED-") !== FALSE)
										$log_file_options .= '<option data-type="archived" value="'.esc_attr($log_file).'"'.(($view_log_file === $log_file) ? ' style="font-weight:bold;" selected="selected"' : '').'>'.esc_html($log_file).'</option>';
								}
								$log_file_options .= '</optgroup>';

								if(stripos($log_file_options, '<option data-type="archived"') === FALSE)
									$log_file_options .= '<option value="" disabled="disabled">— No log files archived yet. —</option>';
							}
							$log_file_options = '<option value="">— Choose a Log File to View —</option>'.
							                    '<option value="" disabled="disabled"></option>'.
							                    $log_file_options;

							echo '<form method="post" name="ws_plugin__s2member_log_viewer" id="ws-plugin--s2member-log-viewer">' . "\n";

							echo '<table class="form-table">' . "\n";
							echo '<tbody>' . "\n";
							echo '<tr>' . "\n";

							echo '<td style="width:80%;">' . "\n";
							echo '<select name="ws_plugin__s2member_log_file" id="ws-plugin--s2member-log-file">' . "\n";
							echo $log_file_options."\n";
							echo '</select>' . "\n";
							echo '</td>' . "\n";

							echo '<td style="width:20%;">' . "\n";
							echo '<input type="submit" value="View" class="button-primary" />'."\n";
							echo '</td>' . "\n";

							echo '</tr>' . "\n";
							echo '</tbody>' . "\n";
							echo '</table>' . "\n";

							echo '<table class="form-table">' . "\n";
							echo '<tbody>' . "\n";
							echo '<tr>' . "\n";

							echo '<td>' . "\n";

							if($view_log_file && file_exists($logs_dir."/".$view_log_file) && filesize($logs_dir."/".$view_log_file))
							{
								echo '<p style="float:left; text-align:left;"><strong>Currently viewing log file:</strong> <a href="'.esc_attr(add_query_arg(array("ws_plugin__s2member_download_log_file" => $view_log_file, "ws_plugin__s2member_download_log_file_v" => wp_create_nonce ("ws-plugin--s2member-download-log-file-v")))).'">'.esc_html($view_log_file).'</a></p>'."\n";
								echo '<p style="float:right; text-align:right;">[ <a href="'.esc_attr(add_query_arg(array("ws_plugin__s2member_download_log_file" => $view_log_file, "ws_plugin__s2member_download_log_file_v" => wp_create_nonce ("ws-plugin--s2member-download-log-file-v")))).'"><strong>download this log file</strong></a> ]</p>'."\n";

								echo '<textarea id="ws-plugin--s2member-log-file-viewer" rows="20" wrap="on" spellcheck="false" style="font-family:monospace;">'.esc_html(file_get_contents($logs_dir."/".$view_log_file)).'</textarea>' . "\n";

								echo '<p style="float:left; text-align:left;"><strong>Currently viewing log file:</strong> <a href="'.esc_attr(add_query_arg(array("ws_plugin__s2member_download_log_file" => $view_log_file, "ws_plugin__s2member_download_log_file_v" => wp_create_nonce ("ws-plugin--s2member-download-log-file-v")))).'">'.esc_html($view_log_file).'</a></p>'."\n";
								echo '<p style="float:right; text-align:right;">[ <a href="'.esc_attr(add_query_arg(array("ws_plugin__s2member_download_log_file" => $view_log_file, "ws_plugin__s2member_download_log_file_v" => wp_create_nonce ("ws-plugin--s2member-download-log-file-v")))).'"><strong>download this log file</strong></a> ]</p>'."\n";
							}
							else if($view_log_file && file_exists($logs_dir."/".$view_log_file))
								echo '<textarea id="ws-plugin--s2member-log-file-viewer" rows="20" wrap="on" spellcheck="false" style="font-family:monospace; font-style:italic;">— Empty at this time —</textarea>' . "\n";

							else if($view_log_file && !file_exists($logs_dir."/".$view_log_file))
								echo '<textarea id="ws-plugin--s2member-log-file-viewer" rows="20" wrap="on" spellcheck="false" style="font-family:monospace; font-style:italic;">— File no longer exists —</textarea>' . "\n";

							else // Display an empty textarea in this default scenario.
								echo '<textarea id="ws-plugin--s2member-log-file-viewer" rows="20" wrap="on" spellcheck="false" style="font-family:monospace; font-style:italic;"></textarea>' . "\n";

							echo '</td>' . "\n";

							echo '</tr>' . "\n";
							echo '</tbody>' . "\n";
							echo '</table>' . "\n";

							echo '</form>'."\n";

							echo '</div>'."\n";
							echo '</div>'."\n";

							do_action("ws_plugin__s2member_during_logs_page_during_left_sections_after_logs", get_defined_vars());
						}

						if (apply_filters ("ws_plugin__s2member_during_logs_page_during_left_sections_display_help", true, get_defined_vars ()))
						{
							do_action ("ws_plugin__s2member_during_logs_page_during_left_sections_before_help", get_defined_vars ());

							echo '<div class="ws-menu-page-group" title="Getting Help w/ s2Member®" default-state="open">' . "\n";

							echo '<div class="ws-menu-page-section ws-plugin--s2member-help">' . "\n";
							echo '<h3>Getting Help w/ s2Member® (Troubleshooting)</h3>' . "\n";
							echo '<p>s2Member® is pretty easy to setup and install initially. Most of the official documentation is right here in your Dashboard (i.e. there is a lot of inline documentation built into the software). That being said, it CAN take some time to master everything there is to know about s2Member\'s advanced features. If you need assistance with s2Member®, please search the <a href="http://www.s2member.com/kb/" target="_blank" rel="external">s2Member® Knowledge Base</a>, <a href="http://www.s2member.com/videos/" target="_blank" rel="external">Video Tutorials</a>, <a href="http://www.s2member.com/forums/" target="_blank" rel="external">Forums</a> and <a href="http://www.s2member.com/codex/" target="_blank" rel="external">Codex</a>. If you are planning to do something creative with s2Member®, you might want to <a href="http://jobs.wordpress.net" target="_blank" rel="external">hire a freelance developer</a> to assist you.</p>' . "\n";
							echo '<p><strong>See also:</strong> <a href="http://www.s2member.com/kb/common-troubleshooting-tips/" target="_blank" rel="external">s2Member® Troubleshooting Guide</a> (please read this first if you\'re having trouble).</p>'."\n";

							echo '<div class="ws-menu-page-hr"></div>' . "\n";

							echo '<h3>Troubleshooting Payment Gateway Integrations</h3>'."\n";
							echo '<p>Please use the s2Member® Log Viewer (above). Log files can be very helpful.</p>'."\n";

							echo '<div class="ws-menu-page-hr"></div>' . "\n";

							echo '<h3>Search s2Member® KB Articles, Forums, Codex and more<em>!</em></h3>'."\n";
							echo '<form method="get" action="http://www.s2member.com/quick-s.php" target="_blank" onsubmit="if(this.q.value === \'enter search terms...\') this.q.value = \'\';">'."\n";
							echo '<p><input type="text" name="q" value="enter search terms..." style="width:60%;" onfocus="if(this.value === \'enter search terms...\') this.value = \'\';" onblur="if(this.value === \'\') this.value = \'enter search terms...\';" /><input type="submit" value="Search" /></p>'."\n";
							echo '</form>'."\n";

							do_action ("ws_plugin__s2member_during_logs_page_during_left_sections_during_help", get_defined_vars ());
							echo '</div>' . "\n";
							echo '</div>' . "\n";

							do_action ("ws_plugin__s2member_during_logs_page_during_left_sections_after_help", get_defined_vars ());
						}

						do_action("ws_plugin__s2member_during_logs_page_after_left_sections", get_defined_vars());

						echo '</td>'."\n";

						echo '<td class="ws-menu-page-table-r">'."\n";
						c_ws_plugin__s2member_menu_pages_rs::display();
						echo '</td>'."\n";

						echo '</tr>'."\n";
						echo '</tbody>'."\n";
						echo '</table>'."\n";

						echo '</div>'."\n";
					}
			}
	}

new c_ws_plugin__s2member_menu_page_logs();
?>