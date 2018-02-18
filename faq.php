<? 

$page = 'faq';

include 'header.php';

?>

	<div class='content'>
		<ol>
			<li class='item' id='3'>
				<div class='q'>
					Who is Boss? 
				</div>
				<div class='a'>
					<p>The rights <b>Boss </b> allow you to manage Time Boss with <b>Control panel </b> and <b>Event Log</b>.</p>
					<p>The user with <b>Boss </b> rights has no time limitation. </p>
					<p>The White and Black lists are valid for <b>Boss</b>. </p>
					<p>The <b>Options </b> are valid for <b>Boss</b>. </p>
					<p>The <b>Boss </b> user may doesn't have the administration rights in Windows. </p>
					<p>The <b>Boss </b> user may have "read-only" access to Time Boss folder.</p>
				</div>
			</li>

			<li class='item' id='4'>
				<div class='q'>
					&nbsp;Who is Subordinate? 
				</div>
				<div class='a'>
					<p>The rights <b>Subordinate </b> are used for users with time limitation. You can set the limitation in <b>Control panel </b> window. You can set <b>Subordinate</b> rights for users that have Administrators right on PC. </p>
				</div>
			</li>

			<li class='item' id='8'>
				<div class='q'>
					 Who is Someone? 
				</div>
				<div class='a'>
					<p>User <b>Someone </b> is a built-in user. The program keeps <b>Someone </b> account for all users who are registered in Windows and who are NOT added in the Time Boss.<br>
					All new users in Windows will get Someone time limitation.<br>
					<br>
					User <b>Someone </b> cannot be removed.<br><br>
					We recommend setting <b>Subordinate</b> rights for<b> Someone</b> with 0 hr 0 min time limitation.<br>
					<br>
					The real names of Windows user accounts for Someone users (users not added in Time Boss) 
					you can see in the column <b>Comments</b> 
					in the Time Boss <b>Event log</b> for <b>Logon</b> event.<br><br>
					You should use this real names for adding new usres in Time Boss (button <b>New user</b>) 
					if you want to give personal time limitations for this users.<br>
					<br>
					If you want you can see real names of all registered in Windows users in the folder "C:\Users". <br>
					The subfolders in this folder have this real names of users.
					</p>
				</div>
			</li>

			<li class='item' id='6'>
				<div class='q'>
					&nbsp;How to change the language?
				</div>
				<div class='a'>
					<p>The panel <b>Language </b> defines the language of program interface. You can select the language
					from list. The program will change the language after selection. Some
					parameters will be changed when the <b>Control panel </b> window will
					be closed. Files from Time Boss folder with extension *.lng are in the
					list. If you will put the new file with .lng extension in Time Boss/Lng
					folder, you can select it from list.<br>
					</p>
					<ol type="a">
						<li class='item' id='7'>
							<div class='q'>
								&nbsp;How to edit the language?
							</div>
							<div class='a'>
								<p>The language files
								are the simple text files and you can change them with any text editor
								like NOTEPAD. The file is structured in lines and sections. The name of
								section shows where the lines from it are used in the program. Each
								line consists of parameter and value (parameter=value). The parameter
								is the name of component in program, and the value is its text
								description. You can change the value how you want. </p>
								<p>Example: </p>
								<p>[FormMain] </p>
								<p>GroupBoxMain=Main </p>
								<p>[FormMain]
								- the section name, GroupBoxMain - the parameter, Main - the value. For
								example, you can change Name to Significant. If you'll save this
								modified file and select it in the list (<b>Language </b> panel) - the name of Main panel in the <b>Main </b> window will be changed to Significant. </p>
								<p>Important: </p>
								<p>Please
								don't change the parameters. Between parameters and = there are no
								blanks. The parameter = value must be in one line. If the value has
								several lines please set the sign / between them. Before editing please
								make the copy of original language file. In any case there is the
								reserve copy of original language file in Time Boss folder:
								time_boss_default.bak.</p>
								<p>Please open NOTEPAD with Administrators right (right mouse on NOTEPAD icon, 'Run as administrator').<br>
								Select Menu-&gt;File-&gt;Open in NOTEPAD. In 'Open' window activate the 'Any files (*.*)' filter and select the file 'time_boss_default.lng' from Time Boss Lng folder. Edit the file how you want. Save this file to the Time Boss Lng folder with the other file name (e.g. time_boss_myedit.lng). </p>
							</div>
						</li>

						<li class='item' id='7B'>
							<div class='q'>
								&nbsp;I don't use  default language file and see ??????? labels in TB Control Panel, why?
							</div>
							<div class='a'>
								<p>Please, check the right language settings for
								non-Unicode programs in 
								Windows Control panel-&gt;Clock, Language and Region-&gt;
								Regional and Language Options-&gt;
								Administrative-&gt;Change system local.<br> 
								Restart PC.</p>
							</div>
						</li>
					</ol>
				</div>
			</li>

			<li class='item' id='11'>
				<div class='q'>
					&nbsp;Installation
				</div>
				<div class='a'>
					<p>Only user with administration rights in Windows can install Time Boss (Pro). </p>
					<p>The program will be installed automatically for all Windows users (existing 
					and added later), so there is no need to install this program each user separately. 
					The  <b>Control panel</b> (for parents - bosses) or the <b>Remaining time window</b> (for children) can be 
					opened using button <b>Start</b> in Windows: Start -&gt; All Programs-&gt; Time Boss-&gt; Time Boss.
					You can copy this link (click Mouse + Ctrl key and "drag") on the desktop of any Windows user.</p>
					<ol type="a">
					<li>Download Time Boss from our website.<br>
					</li>
					<li>Open folder with downloaded file, open timeboss.zip (time-boss.zip) (or open it directly after download) and copy the file timeboss-setup.msi (time-boss-setup.msi) to some folder on to decktop. Run this file. <br>
					</li>
					<li>Press "Yes" button in User Account Control window (with message "You are want to allow...") .<br>
					All our programs have our NiceKit digital signature, but this signature is not verified by Microsoft.<br>
					So you can see the warning "Unknown Publisher" when installation of our program starts.<br>
					Please select <a href="screenshots/win_protection_ss_1.jpg">"More Info</a>" and then "<a href="screenshots/win_protection_ss_2.jpg">Run Anyway</a>" buttons on the
					Windows SmartScreen protection panel, if the panel appears. 
					We guarantee the absence of malicious code in our programs!
					<br>
					</li>
					<li>Press "Agree","Next","Install" and "Finish" buttons in Time Boss setup program.<br>
					</li>
					<li>After installation, Time Boss icon will be appears in Windows system tray.<br>
					</li>
					<li>Open Time Boss Control panel from Time Boss icon in system tray (right mouse click on Time Boss tray icon-&gt;Popup menu-&gt;Control panel).<br>
					</li>
					<li>Set time limitation for Windows users as you need (use F1 button to launch Time Boss help file if needed).</li>
					</ol>
					<p>All Тime Вoss units are located in Time Boss folder only. Time Boss doesn't have any units in Windows system folders.</p>
					<p>The program can be stopped after installation of the new "big" Windows 10 updates (Microsoft releases the "big" update once per year usally. E.g. Windows 10 version 1511 build 10586 November 2015 update). Time Boss (Pro) is highly protected program.
					The "big" Windows 10 update can not reinstall it correctly and stops it.<br>
					In this case uninstall the program before Windows 10 update and install the program (you can download the setup file from our site) 
					again in the old folder. <br>
					All Time Boss (Pro) settings, screenshots and logs will be saved. If the program was not uninstalled before Windows 10 update
					and the program do not work after Windows 10 update then uninstall the program using the Windows uninstalling wizard and 
					install the program (you can download the setup file from our site) again in the old folder. </p>
					<p>Please email us to <script language="JavaScript" type="text/javascript">
					$a="supp&#111;rt"; $b="nicekit."; $c="c&#111;m"; $result = $a + "@" + $b + $c;
					document.write("<a href=\"mailto:" + $result + "\" + class=\"text1" + "\">" + $result + "</" + "a>");
					</script><a href="mailto:support@nicekit.com" +="" class="text1">support@nicekit.com</a> if any problem appears. 
					We will help you.</p>
					<p>
					If you have the last version of <b>Norton</b> Antivirus then 
					restore the file <b>time_boss_s.exe</b> from <b>Quarantine</b> if needed and restart the PC again. 
					(Open Norton Security -&gt; Security -&gt; History -&gt; 
					select item time_boss_s.exe (Sonar...) Quarantined -&gt; 
					select 'Options' as Recommended Action -&gt; Select 'Restore &amp; exclude this file' -&gt; 
					select 'Yes' in Quarantine Restore -&gt; Close Norton Security) . <br>
					<br>
					If you have the last version of<b> Avast!</b> Antivirus then stop it
					for a few minutes, 
					install (repair) Time Boss, then add the Time Boss folder (usually C:\Program Files (x86)\Time Boss) (or files <b>time_boss_s.exe,
					time_boss.exe, time_boss_v.exe</b> and <b>time_boss_m.exe</b>) to the list of exclusions in Avast!
					(Avast -&gt; Open Avast! user interface -&gt; Settings -&gt; Antivirus -&gt; Exclusions)
					and start Avast! again. Pease see the <a href="screenshots/tb_avast_09.jpg">picture</a>.</p>
				</div>
			</li>

			<li class='item' id='11AA'>
				<div class='q'>
					Can I install Time Boss Pro while logged in via Team Viewer?
				</div>
				<div class='a'>
					<p>Yes, if you have administrator rights in this session.
					</p>
				</div>
			</li>

			<li class='item' id='12'>
				<div class='q'>
					&nbsp;Uninstall
				</div>
				<div class='a'>
					<p>You
					should notice, that Time Boss is a highly protected product and it's
					impossible to deinstall this application by both simple folder deleting
					and Windows uninstall wizard. </p>
					<p>You can't uninstall program when it works. </p>
					<p>For deinstallation  open <b>Options </b>and push the button <b>Prepare for uninstall</b> at the bottom. </p>
					<p>The program will be stopped and then you can uninstall it with Install/Uninstall wizard in Control Panel Windows. </p>
					<p>The users with <b>Subordinate </b> rights can't do this. The <b>Main </b> window can be opened only by users with <b>Boss </b> rights. <b>Main </b> can be protected with <b>Password</b>. </p>
					<p>If the program isn't registered in 30 days you can only uninstall Time Boss. </p>
					<p>Even
					if the trial period has finished, the program works during few minutes
					after PC starting (every time computer starts, until you wouldn't
					uninstall application correctly). To do this you should: Restart your
					system. Open TimeBoss <b>Main </b> ( it's available during these few minutes) -&gt; <b>Options </b> -&gt; button <b>Prepare for Uninstall</b>. <br>
					Close Internet Explorer if it is running.<br>
					Please wait one minute and use Windows uninstall wizard.
					</p>
					<b>For old version (2...2.505) of Time Boss (Pro) on Windows Vista and Windows 7, 8:</b><br>
					<br>
					If the button "Prepare for uninstall" is disabled then 
					run time_boss.exe with administrators rights. <br>
					For that
					choose "Hide" in popup menu for tray icon of Time Boss. <br>
					Then open Time Boss with administrators rights 
					(Run-&gt;Program files-&gt;Time Boss-&gt;time_boss.exe-&gt;right mouse click
					and choose "Run with administrators rights" from popup menu).<p></p>
					<br>
				</div>
			</li>

			<li class='item' id='140620'>
				<div class='q'>
					Registration
				</div>
				<div class='a'>
					<p>
					1.Reboot the PC (power off/on, not wake up!). <br>
					2.Open Time Boss-&gt;Control panel-&gt;About-&gt;Registration
					and input name and key (use copy / paste).<br>
					3.Close Registration and About windows.<br>
					4.Close Control panel window.<br>
					5.Reboot the PC  (power off/on, not wake up!). <br>
					<br>
					Even if the trial period has finished, the program works
					during few minutes after PC starting (every time computer power on, not wake up)
					until you wouldn't input your register key and name. <br><br>
					Please note the registrations info for Time Boss and Time Boss PRO 
					are different!
					</p>
				</div>
			</li>

			<li class='item' id='13'>
				<div class='q'>
					&nbsp;How to update Time Boss to new version? 
				</div>
				<div class='a'>
					<p>If you have the old version of program and want to update to new version without loss of screenshots and event log then open <b>Options </b> window in Time Boss and push the button <b>Prepare for uninstall</b>.<br>
					Close Internet Explorer if it is running.</p>
					<p>
					If you have  version &gt;3.01 then uninstall it using Windows uninstall wizard without removing screenshots, event log and settings 
					(dialog box will appear with this question), then run the .msi file of the new version and install the new version to the same folder.
					</p>
					<p>If you want make the full update then uninstall the old version with screenshots, event log and settings and then install the new
					version. In this case the event log and all screenshots will be lost.
					It's needed to input registration info (name and key) again and  PC restart.<br>
					<br>
					If you have old version (2...2.505) of Time Boss then run .msi file of new version WITHOUT PC reboot.<br> 
					<br>
					<b>For old version (2...2.505) of Time Boss (Pro) on Windows Vista and Windows 7, 8:</b><br>
					<br>
					If the button "Prepare for uninstall" is disabled then 
					run time_boss.exe with administrators rights. <br>
					For that
					choose "Hide" in popup menu for tray icon of Time Boss. <br>
					Then open Time Boss with administrators rights 
					(Run-&gt;Program files-&gt;Time Boss-&gt;time_boss.exe-&gt;right mouse click
					and choose "Run with administrators rights" from popup menu).</p>
				</div>
			</li>

			<li class='item' id='44'>
				<div class='q'>
					Can I download and install the latest version of Time Boss without
					deinstallation of the old version, and how to avoid losing my settings for different users?
				</div>
				<div class='a'>
					<p>Yes, of course.
					<br>
					<br>
					If you have the old version of program and want  
					to store the old users list, log file and screenshots
					then open Options window in old version of the program 
					and push the button "Prepare for uninstall". 
					<br>
					<br>
					The program will be stopped and then you can uninstall it with Install/Uninstall wizard in Control Panel Windows (for old version &lt;2.505 of Time Boss you do not need to do this). </p>
					<p>The uninstall does not remove screenshots, event log and settings (dialog box will appear with this question), then install the new version. 
					<br>
					<br>
					You can also save the configuration to some file (File-&gt;Save configuration to file) and then load it.
					</p>
				</div>
			</li>

			<li class='item' id='140418B'>
				<div class='q'>
					How to move Time Boss from the old PC to the new PC?
				</div>
				<div class='a'>
					<p>At first uninstall Time Boss on the old PC without removing settings, event log and screenshots.
					How to do that is <a href="#12">here</a>.<br>
					<br>
					Then create manually the Time Boss folder on the new PC 
					(for 32 bit Windows by default this folder is "C:\Program Files\Time Boss",
					for 64 bit Windows  - "C:\Program Files (x86)\Time Boss"). <br><br>
					Then copy (using memory card) all files and folders from Time Boss folder on the old PC  
					to the created Time Boss folder on the new PC.<br><br>
					Then install Time Boss on the new PC. 
					How to do that is <a href="http://nicekit.com/tbfaq.htm#11">here</a>.
					As destination folder use the created Time Boss folder.
					If you have license then open Time Boss and input registration name and key.
					<br>
					Reboot the PC (not wake up).<br>
					<br>
					Delete the Time Boss folder on the old PC at all.     </p>
				</div>
			</li>

			<li class='item' id='41'>
				<div class='q'>
					Does Time Boss (Pro) work with Windows 8.1, Windows 10?
				</div>
				<div class='a'>
					<p>Yes.<br><br>
					If you downloaded Time Boss (Pro) version 3.15 and above then install the file
					<b>timeboss(pro)-setup.msi</b> from timeboss(pro).zip or <b>time-boss(-pro)-setup.msi</b> from time-boss(-pro).zip.<br>
					<br>
					If you will upgrade to Windows 10 then uninstall (without deleting settings, screenshots and logs, during the uninstallation dialog box will appear with this question) Time Boss (Pro) before Windows 10 installation please.<br>
					<br>
					After Windows 10 installation install Time Boss (Pro) from the file 
					<b>timeboss(pro)-setup.msi (time-boss(-pro)-setup.msi)</b> in the old Time Boss (Pro) folder again.<br><br>
					All Time Boss (Pro) settings, screenshots and logs will be saved.<br> 
					If you have registration info then input your registration name and key again.<br> Please contact our support if any problems appear.<br>
					<br>
					If you downloaded Time Boss (Pro) version 3.9 and less then install the file
					<br>
					timeboss-setup.msi from timeboss.zip. <br>
					But this file need Microsoft .NET Framework 2.0.<br>
					Windows 8 includes the 2.0, 3.5 and 4.5 versions of the .NET Framework.<br>
					However, on some PC's, only 4.5 is available for immediate use after a clean install.<br>
					The NET 2.0 and 3.5 are not installed by default. </p>
					<p>To install .NET 2.0 or 3.5 on Windows 8: <br>
					1. Go to Control Panel (Windows Key + X) <br>
					2. Choose Programs <br>
					3. Click Turn Windows features on or off <br>
					4. Check the ".NET Framework 3.5 (includes .NET 2.0 and 3.0)" box to enable the feature <br>
					5. Click OK. <br>
					<br>This Microsoft .NET 3.5.1 feature contains both the 2.0 and 3.5 versions of the Framework, so you won't install standalone 2.0 Framework. <br>
					When you run the install file of Time Boss (Pro) that requires .NET 2.0 runtime, Windows 8 will prompt automatically: Turn Windows features on or off. <br>
					Note that install through Windows Auto Update does not work if you don't have an Internet connection.          </p></li>
			<li class='item' id='150811'>
				<div class='q'>
					I want to upgrade my system to Windows 10. Time Boss supports Windows 10?
				</div>
				<div class='a'>
					<p>Yes Time Boss (Pro) works on Windows 10.<br><br>
					If you want to upgrade to Windows 10 then uninstall (without deleting settings, screenshots and logs, during the uninstallation dialog box will appear with this question) Time Boss (Pro) before Windows 10 installation please.<br>
					<br>
					After Windows 10 installation install Time Boss (Pro) from the file<br> 
					<b>timeboss(pro)-setup.msi (time-boss(-pro)-setup.msi)</b><br>
					in the old Time Boss (Pro) folder again.<br>
					<br>
					All Time Boss (Pro) settings, screenshots and logs will be saved.<br> 
					If you have registration info then input your registration name and key again.<br> Please contact our support if any problems appear.
					</p>
				</div>
			</li>

			<li class='item' id='151220'>
				<div class='q'>
					After the installation of the "big" Windows 10 update the program do not start.
				</div>
				<div class='a'>
					<p>
					The program can be stopped after installation of the new "big" Windows 10 updates
					(Microsoft releases the "big" update once per year usally. 
					E.g. Windows 10 version 1511 build 10586 November 2015 update or 1607 August 2016).<br>
					The problem is that the files of the program are protected against deleting and moving.<br><br>
					In this case uninstall the program before Windows 10 update and 
					install the program (you can download the setup file from our website) 
					again in the old folder. <br>
					All Time Boss (Pro) settings, screenshots and logs will be saved.<br>
					If you have registration name and key then input (use copy/paste) your registration name and key in Time Boss (Pro) again and reboot the PC. <!--p>The old versions of program can be stopped after installation of the new &quot;big&quot; Windows 10 updates (Microsoft releases the &quot;big&quot; update once per year usally. 
					E.g. Windows 10 version 1511 build 10586 November 2015 update or 1607 August 2016). Time Boss (Pro) is highly protected program.
					The &quot;big&quot; Windows 10 update can not reinstall it correctly and stops it.<br>
					In this case uninstall the program before Windows 10 update and install the program (you can download the setup file from our site) 
					again in the old folder. <br>
					All Time Boss (Pro) settings, screenshots and logs will be saved. If the program was not uninstalled before Windows 10 update
					and the program do not work after Windows 10 update then uninstall the program using the Windows uninstalling wizard and 
					install the program (you can download the setup file from our site) again in the old folder. </p-->

					<br>
					<br>
					If the program was not uninstalled before Windows 10 update
					and the program does not work after Windows 10 update then uninstall 
					the program using the Windows uninstalling wizard after Windows 10 update and 
					install the program (you can download the setup file from our website) in the old folder again.<br>
					<br>
					If you get "Error 1001" Windows error message so try  to 
					click 'Modify' button in Windows Settings/App &amp; features. Then  chose 
					'Repair Time Boss'.
					However you can  lost all the settings :(.  <br>
					<br>
					Please email us to support if any problem appears. 
					We will help you.<br>
					<br>
					You can save all your TB settings to file (TB-&gt;Control panel-&gt;Menu-&gt;File-&gt;Save settings) and load them<br>
					in future if needed.<br>  
					<br>
					If you turn off the Time Boss (Pro) self protection (TB-&gt;Control panel-&gt;Options-&gt;General-&gt;Protection),
					the Time Boss (Pro) should "survive" a major Windows 10 update.
					</p>
				</div>
			</li>

			<li class='item' id='131218'>
				<div class='q'>
					Can the Time Boss software restrict the usage of the computer off-line as well?
				</div>
				<div class='a'>
					<p>Yes, of course!<br>Time Boss does not need permanently internet connection.</p>
					</li>

			<li class='item' id='150210'>
				<div class='q'>
					Should I just eliminate the time restriction on built in Windows parental control?
				</div>
				<div class='a'>
					<p>
					How do you want...<br>
					Windows parental control and Time Boss are totally independent services.<br>
					Time Boss works "after" built in Windows parental control.<br>
					When built in Windows parental control allows to use PC then start to work Time Boss limitation.
					So the time limitation of Time Boss complements (increases) the  build in Windows parental control.
					</p>
				</div>
			</li>

			<li class='item' id='13A'>
				<div class='q'>
					If I in the future want to move the Time Boss (Pro) from an old
					(decommissioned) computer to a new one - is that possible without buying new
					licenses?
				</div>
				<div class='a'>
					<p>Yes, of course.</p>
				</div>
			</li>

			<li class='item' id='43'>
				<div class='q'>
					I bought parental control Time Boss, by the way A FANTAXCTIC SOFTWARE TOOL TO KEEP MY KIDS
					UNDER PC-CONTROL, in November 2006. I have registered version 2.2.7.0. Is it possible to upgrade for free (or what is the fee?) to the latest version and how do I do this?
				</div>
				<div class='a'>
					<p>You can upgrade to latest version for free. As a registered user you get all future versions for free.</p>
				</div>
			</li>

			<li class='item' id='32A'>
				<div class='q'>
					Do you support domain users?
				</div>
				<div class='a'>
					<p>Yes, TB supports domain users.
					You can add users manually - press button <b>New</b> at right (or<b> Menu-&gt;Users-&gt;New</b>).
					As user name use the user name without domain prefix ( <b>domain\username</b> -&gt; <b>username</b>) </p>
				</div>
			</li>

			<li class='item' id='34'>
				<div class='q'>
					What the name of domain (net, lan) user should be like in TB? 
				</div>
				<div class='a'>
					<p>The name of TB user should be short and without domain name. </p>
					<p>Example: for net user <b>domain\dad </b> the user name in Time Boss will be <b>dad. </b></p>
				</div>
			</li>

			<li class='item' id='20171203'>
				<div class='q'>
					Does TB work with users if they have Microsoft account and local account in Windows?
				</div>
				<div class='a'>
					<p>Yes, TB works with all Windows users (local and with Microsoft account).<br>
					<br>
					If your kid uses two different Windows accounts then in TB should be two different accounts too.<br>
					<br>
					May be the problem is that TB can not recognize your kid when kid logon in Windows with Microsoft account.
					In this case TB gives Someone right for him.<br>
					So you should add the new user (for kid with Microsoft account) in TB manually and set needed time limitations.
					Please open the TB event log and check how TB recognize your kid. <br>
					Please read <a href="http://nicekit.com/tbfaq.htm#160915">here</a>.
					</p>
				</div>
			</li>

			<li class='item' id='160915'>
				<div class='q'>
					How to add new kid's user? Now kid uses "Someone" rights.
				</div>
				<div class='a'>
					<p>You should add new users (using button "New user") with kid's Windows users names in TB.<br>
					The kid uses "Someone" rights when kid's user name is absent in TB.<br>
					When kid uses "Someone" rights you can see the real kid Window user name
					in the TB event log in the "comments" column for "Logon" event.<br>
					Please use button "New user" and add this real kid Window user name.
					Skip "Windows user not found" message - press "Ok".
					Restart the kid session and see the TB event log - this new user name should be appears
					in the "user" column.<br>
					Then set needed time limitation for this user in TB Control panel.
					</p>
				</div>
			</li>

			<li class='item' id='140127A'>
				<div class='q'>
					How to copy user settings from one user to another, or from one PC to another PC?
				</div>
				<div class='a'>
					<p>Time Boss and Time Boss Pro save all settings in the main Time Boss folder personally on each computer.<br>
					When you want to copy settings from one PC to another then use .cfg or .cfu files please.<br>
					You can save Time Boss settings on one PC to shared folder or flash card then load this settings to Time Boss on another PC.<br>
					Please use Time Boss Control panel menu <b>File</b>.<br>
					When you want to copy setting from one user to another - use <b>Copy</b> and <b>Paste</b> commands in Time Boss Control panel menu
					(select needed user - press <b>Copy</b>, select another user - press <b>Paste</b>).
					</p>
				</div>
			</li>

			<li class='item' id='2'>
				<div class='q'>
					 Can the user without administration rights in Windows manage Time Boss? 
				</div>
				<div class='a'>
					<p align="left">Yes. </p>
					<p align="left">The user must have <b>Boss </b> rights in Time Boss. </p>
					<p align="left">The user must have the access (read-only is enough) to Time Boss folder. The user can't start the Time Boss <b>Control panel </b> without access to Time Boss folder.</p>
				</div>
			</li>

			<li class='item' id='140224'>
				<div class='q'>
					I have only one user on PC, can I use Time Boss?
				</div>
				<div class='a'>
					<p>Yes, of course.<br><br>
					1. At first set the password on the TB Control panel  (<b>TB -&gt; Control panel -&gt; Options -&gt; General -&gt; Password</b>).
					With this password you can open TB Control panel in kids session too. Additionally you can quickly add extra time for kid on the current day.<br><br>
					2. Set the Subordinate rights for kid and input needed time limitations.
					If TB warns that there are no more Boss users - then add new dummy user ( which is not in Windows) in TB and
					get him Boss rights.<br><br>
					If your kid is "computer-guru" then set the Subordinate rights with zero time limit 
					for all other users  in Time Boss (Guest, Administrator, Someone).
					</p>
				</div>
			</li>

			<li class='item' id='51'>
				<div class='q'>
					 If my son has Administrator level rights on his Windows 10 PC, will he be able to hack into Time Boss and change Passwords etc, and override it's controls?
				</div>
				<div class='a'>
					<p>
					Users with Administrators level rights in Windows and <b>Subordinates</b> rights in Time Boss (TB)
					cannot open TB Control panel, cannot change any settings in TB and cannot stop TB.
					</p>
				</div>
			</li>

			<li class='item' id='170125'>
				<div class='q'>
					I have a question about the security.
					When we install the software on 1 user account under windows 10 and we set the maximum time for 2 hours, the user is able to 
					use the computer for 2 hours which is fine, but the user is admin and must remain admin of the machine.  When the user creates a 
					new user under user account, he can login again with that user and still use the computer ... is there a solution for this please?
				</div>
				<div class='a'>
					<p>
					Yes, of course.<br>All new Windows users gets the <b>Someone</b> (built-in user in TB) rights in TB with zero time limit.<br>
					You can change the settings for <b>Someone</b> if needed, or you can add manually the new Windows user in TB and set time limit for it.<br> 
					Please activate the password in TB to get access to TB Control panel in kids sessions. 
					</p>
				</div>
			</li>

			<li class='item' id='51C'>
				<div class='q'>
					My children stay logged in to their Windows 10 accounts... We use fast
					user switching. Does your product take into account idle time so it is
					not counted toward their limit?
				</div>
				<div class='a'>
					<p>Time Boss take into account the time for active in current moment user only.<br>
					The time limit will not counted toward for all others users logged in Windows in current moment.
					</p>
				</div>
			</li>

			<li class='item' id='160319'>
				<div class='q'>
					Can you please confirm how computer time limits work if the "Switch User" feature of Windows 10 etc is used - ie 
					if a Subordinate user simply locks the screen and then another subordinate logs onto a new session?
				</div>
				<div class='a'>
					<p>The time countdown for the user stops when the user locks session or logs out or another user logs onto  a new session.
					Please open and see the event log.
					</p>
				</div>
			</li>

			<li class='item' id='130927B'>
				<div class='q'>
					I need a tool, which block my PC for some hours and give him free, without zwing a password. 
					Only one password shall be needed, to deactivate and deinstall or to change options, 
					and this shall habe friend of mine. But between 6am and 7am and from 4pm to 10pm, 
					I wanna have all rights on my PC, EXCEPT the possibility, to deactivate the time restriction Software, which I use.
					And I guess, TimeBoss is Perfect for that and for me
				</div>
				<div class='a'>
					<p>Please set this settings in Time Boss:<br>
					1. Set the password (TB-&gt;Control panel-&gt;Options-&gt;General page). <br>
					In feature your friends can change this password.<br>
					2. Set Subordinate rights for Someone user in TB with 0 PC's time limit.<br> 
					3. Set Subordinate rights for your Windows user in TB (if you have no more users with Boss rights in TB then add new user with any name in TB,
					in feature your friends can change the name of this user in TB). <br>
					4. Set needed time limitation for your user on Computer time panel.<br>
					5. Disable event log and screenshots log if needed.<br>
					6. Open Internet filter page and uncheck all options. Disable all internet filters.<br>
					7. Open System protection page and uncheck all options.<br>
					8. Disable Internet monitor at all (TB-&gt;Control panel-&gt;Options-&gt;Internet filter-&gt;Interent monitor-&gt;uncheck Enable).<br>
					9. May be your friends activate several time grants. They can get time grants 
					for you if you need in future.<br>
					</p>
				</div>
			</li>

			<li class='item' id='150210_2'>
				<div class='q'>
					We would like to make the computer available for general use for a set
					number of hours each day - say 2:00, all browsers available for :45 minutes
					a day (these two things I know how to do), but then there are some programs
					(MS office for school) and some school related websites we want our kids to have more or unlimited access to.  
					Is this situation possible to do easily in your software?
				</div>
				<div class='a'>
					<p>
					You can try so:<br><br>
					1.Disable all <b>Computer time limit</b> - set 24h<br> 
					2.Disable all <b>Browsers time limit</b> - set 24h<br>
					3.Activate the <b>Black and white list of programs</b>.<br><br>
					Here are two ways...<br>
					a:<br>
					To use the <b>Black list</b> and add the new group of programs with 2h  time limit.<br>
					Then add in this group needed games or programs.<br>
					Then add the second group with 45 minutes time limit and add all browsers except IE to it.<br>
					All others programs (not included in groups) will be allowed all time.<br><br>
					b.<br>
					To use the <b>White list </b>and add the new group of programs with 2h  time limit.<br>
					Then add in this group needed games or programs.<br>
					Then add the second group with 45 minutes time limit and add all browsers except IE to it.<br>
					Then add the third group with 24h time limit and add IE, MS Word... to it.<br>
					All others programs (not included in groups) will be NOT allowed all time.<br><br>
					To restrict IE websites use the white list of websites in <b>Black and white list of internet sites</b>.<br>
					Add needed websites to it. Only this websites will be allowed all time.
					</p>
				</div>
			</li>

			<li class='item' id='170906'>
				<div class='q'>
					I want to know if there is an option to lock the screen when time runs out
					instead of log off. When kid logs off TB closes all applications etc... a lock screen will leave
					them open in the background?
				</div>
				<div class='a'>
					<p>Yes, you should activate the option <b>Disconnect session</b> on the panel <b>Termination type for PC</b>
					(TB-&gt;Control panel-&gt;Options).<br>
					Please note, your kid should have the password (it can be any plain text, e.g. 123)
					for Windows account in this case.
					<br>
					See also <a href="http://nicekit.com/tbfaq.htm#160915B">here</a>.
					</p>
				</div>
			</li>

			<li class='item' id='150723'>
				<div class='q'>
					Can I set a weekly limit – like 4 h in 7 days – combined with a daily limit – say 2 h – 
					so that the computer/device will close down when the weekly or daily  limit is up? 
					Never mind if it? Is only been 2/3 days to use up the weeks’ time? 
					And then only unlock when the 7 weekdays are up?
				</div>
				<div class='a'>
					<p>Yes, of course. Time Boss will  work as you write.
					</p>
				</div>
			</li>

			<li class='item' id='20151102B'>
				<div class='q'>
					The option "weekend bonus", how exactly does it work?
					If you have set a daily limit of 3 hours from Monday to Sunday, the weekend
					bonus to 2 hours and defined the weekend as being Saturday and Sunday.
					Does the user then have 2 additional hours for each weekend day
					or in total for the 2 days, meaning if he uses 5 hours on Saturday there
					are only 3 hours left for Sunday?
				</div>
				<div class='a'>
					<p>User gets additional 2 hours per each weekend day. So totally user
					has 5 hours on Saturday and 5 hours on Sunday.
					</p>
				</div>
			</li>

			<li class='item' id='160728'>
				<div class='q'>
					According to the event log, my son logged off and logged on 32 times in 30 minutes after he exceeded his time allowance, 
					and an hour or two later in the day  he repeated the feat by logging off/on 65 times in 60 minutes. How prevent that?
				</div>
				<div class='a'>
					<p>Time Boss gives 1 minute additional time when time is out for each session to use grants, password...
					You can disable this option <b>Don't wait after logon when time is over</b> here <b>TB-&gt;Control panel-&gt;User-&gt;Miscellaneous-&gt;Extended</b>.
					</p>
				</div>
			</li>

			<li class='item' id='160915A'>
				<div class='q'>
					When I log into the standard user account, TimeBoss force a log off immediately
					from that account. Why?
				</div>
				<div class='a'>
					<p>TB works with all (admin and not) Windows users.<br><br>
					May be the problem is that your "standart" user is absent in TB.<br>
					In this case TB gives him "Someone" rights with zero time limit and stops session.<br>
					When user uses "Someone" rights you can see the real Window user name
					in the TB event log in the "comments" column for "Logon" event.<br>
					Please use button "New user" and add this real Window user name.<br>
					Skip "Windows user not found" message - press "Ok".<br>
					Restart the user session and see the TB event log - this new user name should be appears
					in the "user" column.<br><br>
					Then set needed time limitation for this user in TB Control panel.
					Additionally, please check may be your antivirus stops TB in users session.
					</p>
				</div>
			</li>

			<li class='item' id='160915B'>
				<div class='q'>
					In Windows 10, after the end of time the program endlessly locks and unlocks PC. What's happening?
				</div>
				<div class='a'>
					<p>It is necessary to set in TB the <b>Termination type of PC (and break)</b>
					as <b>Log Off</b> instead of <b>Disconnect session</b>.<br>
					Or to give child the password to Windows account.
					</p>
				</div>
			</li>

			<li class='item' id='160930'>
				<div class='q'>
					The Time Boss internet monitor (time_boss_v.exe) uses 20% of CPU, son's PC is old... How to disable this monitor totally?
				</div>
				<div class='a'>
					<p>Please uncheck the <b>Enable for all browsers without filter of forbidden words and phrases</b> 
					option on <b>TB-&gt;Control panel-&gt;Options-&gt;Internet monitor</b><br>The internet monitor will be stopped. <br>
					Time Boss(Pro) will control browser Internet Explorer (IE) only.
					</p>
				</div>
			</li>
		</ol>
		<div class="headline">
			Kid wants to play some more today
		</div>
		<ol>
			<li class='item' id='1'>
				<div class='q'>
					How  to add time for the subordinate user quickly? (Your kid wants to play some more...)
				</div>
				<div class='a'>
					<p>You have several ways. First, you can open the <b>Control panel</b>. If the <b>Control panel</b> is not enabled please define the password in Boss session. </p>
					<p>Then select the user whom you are going to add time. Then: </p>
					<ol>
					<li>
					<p align="left">Simply set the time you need in panel <b>Today's control. Last remaining time</b> (Control panel-&gt;Computer time limitation-&gt;button <b>Today's control. Last remaining time</b>). </p>
					</li>
					<li>
					<p align="left">Simply set for user the <b>Boss </b> rights. If the <b>Control panel </b> window is protected with password so the user can not change it. </p>
					</li>
					<li>
					<p>If you need to delete the time range limit, simply uncheck <b>No time range </b> in panel <b>Computer time limit</b>. </p>
					</li>
					<li>
					<p>Of course you can simply increase the time in panel <b>Computer time limit</b>. </p>
					</li>
					<li>You can get <b>Grand</b> for kid.</li>
					</ol>
					<p>Close the <b>Control panel </b> window. The changes take effect.</p>
				</div>
			</li>
			<li class='item' id='1C'>
				<div class='q'>
					&nbsp;What is the prize (grant)?
				</div>
				<div class='a'><br>
					<br>Time grant is a key word (key) and time bonus. 
					<br>
					<br>
					The subordinate user can select <b>Get grant</b> item in popup menu in TB icon in tray.<br> 
					Then user input a key word and receives the time bonus when the key is valid.
					<br>
					<br>
					For example, after the child has made homework, you can tell him by the phone  the key word of the grant. 
					The child will enter key and will receive additional time.<br><br>
					Time grant is valid for all time limitation objects (sites, programs...)<br>
				</div>
			</li>
			<li class='item' id='160329A'>
				<div class='q'>
					Is there a way to make a time grant apply to any computer?
				</div>
				<div class='a'>
					<p>You can create new grants only on the PC where this grants will be used.<br>
					If you use TB Pro, then you can connect remotely to others PC using TB Pro and
					create grants for this PC.
					</p>
				</div>
			</li>
			<li class='item' id='150723_2'>
				<div class='q'>
					How to I create a time grant code for browser usage? It seems the only one I can create is for computer usage.
					But if the computer usage is still valid but the browser usage is end of time…. How do I do that?
				</div>
				<div class='a'>
					<p>Grants are universal. So you can use time grants for all users, for all time limited programs, websites, browsers...<br>
					Kid can open the information panel in TB  -&gt; e.g. Browser panel and can click by Mouse the Grant picture, or kid can input the grant code directly in the TB Warning message (using Grant picture)
					</p>
				</div>
			</li>
			<li class='item' id='38'>
				<div class='q'>
					How to add time for program from Black List quickly? (Kid wants to play some more...) 
				</div>
				<div class='a'>
					<p>Kid can use the <b>Grant</b> and input it in the warning window or in<b> My time limitation-&gt;Black and white lists of programs</b>-&gt;needed program-&gt;<b>Time limit</b>-&gt;
					click on Grant image. <br>
					<br>
					Please check the option<b> Show black and white lists in Sub.session</b> on panel <b>Options-&gt;General</b> <br>
					<br>
					You have several ways.<br>
					<br> 
					At first you should open the <b>Control panel </b> any case. If the <b>Control panel </b> is not enabled please define the password in Boss session. </p>
					<p>Then select the user whom you are going to add time. Then open panel <b>Black and white lists of programs</b>, select needed program or folder and uncheck <b>Active </b> column or push button <b>Program time limit</b> and : </p>
					<ol>
					<li>
					<p>Simply set the time you need in panel <b>Last remaining time</b>. </p>
					</li>
					<li>
					<p>If you need to delete the time range limit, simply uncheck <b>No time range </b> in panel <b>When allowed</b>. </p>
					</li>
					<li>
					<p>Of course you can simply increase the time in panel <b>How much time allowed</b>. </p>
					</li>
					</ol>
					<p>Close the <b>Program time limit </b> and <b>Control panel </b> windows. The changes take effect. </p>
				</div>
			</li>
		</ol>

		<div class="headline">
			How to limit the Internet surfing
		</div>

		<ol>
			<li class='item' id='16'>
				<div class='q'>
					How to limit the Internet surfing?
				</div>
				<div class='a'>
					<p>Select <b>Browser time limitation </b> panel and define needed time limitation. <br><br>
					If you want to disable internet in any time, please set 0 hours and 0 minutes in "per Day" or "per Week" sections.<br>
					<br>
					If you want to enable internet in any time, please set 24 hours and 0 minutes in "per Day" sections. <br>
					<br>
					You can use<b> Internet time limitation</b> for Boss users too (for self limitation).</p>
				</div>
			</li>
			<li class='item' id='17'>
				<div class='q'>
					How to block some undesired web pages? 
				</div>
				<div class='a'>
					<p>The Time Boss can do this. Please use settings on "Internet filter" page. <br>
					<br>
					All websites from table Forbidden Internet sites (Black list) will be blocked.<br>
					<br>
					For example: http:\\bad.com or www.bad.com or *.bad.com. <br>
					<br>
					<b>The best way is to use * before website name (for example *.bad.com).</b></p>
					<p>The table Allowed Internet sites (White list)  contains allowed websites, ALL others websites will be blocked. &nbsp; <br>
					So if the White list is not empty, only websites in it and homepage can be visited. </p>
				</div>
			</li>
			<li class='item' id='140127'>
				<div class='q'>
					Can Time Boss stop https websites, e.g. https://facebook.com, https://youtube.com?
				</div>
				<div class='a'>
					<p>Yes.<br> 
					If you add *.facebook.com to TB <b>Black and White lists of internet sites</b> then both protocols http and https will
					be blocked for facebook.com. See <a href="screenshots/tb_ie_filter_https2.jpg">here</a>.<br>
					If you activate TB <b>Internet filter</b> then both protocols http and https will be filtered. See <a href="screenshots/tb_ie_filter_https.jpg">here</a>.
					</p>
				</div>
			</li>
			<li class='item' id='17AA'>
				<div class='q'>
					TB is almost the best parental control application I ever used. 
					However, I'd to get the possibility to block a webpage/URL/Domain using a scheduler so that my kids could or couldn't use a website/blog when they are allowed to do it...
				</div>
				<div class='a'>
				  <p>Open page "Black and white lists of internet sites", add needed websites (for example *.facebook.com) to "Black list"
				and set for this websites time limitation (button with Clock image at right, you can use time table, time range...). </p>
				</div>
			</li>
			<li class='item' id='130927A'>
				<div class='q'>
					How kid can see remaining time for websites and programs from Black and White lists?
				</div>
				<div class='a'>
					<p>Please open TB-&gt;Contol panel-&gt;Options-&gt;General page and
					check options "Show Black and White list in Sub. session".
					In this case kid can open Black and White lists for websites and programs
					(in read only mode) and get information about remaining time
					for each website or program.<br><br>Additionally kid can use grant for any of websites (button with Clock at right).
					</p>
				</div>
			</li>
			<li class='item' id='17AB'>
				<div class='q'>
					Is it possible setup a daily time limit for Yahoo Mail, YouTube and IM?
				</div>
				<div class='a'>
					<p>Yes of course.<br><br>
					Please add Yahoo Mail page (*.mail.yahoo.com) and
					YouTube (*.youtube.com) to internet Black list and set time limitation for them.<br>
					<br>
					Add your IM program to programs Black list and set time limitation for it. 
					</p> 
				</div>
			</li>
			<li class='item' id='170808'>
				<div class='q'>
					How works the time limitation for websites in groups?
				</div>
				<div class='a'>
					<p>All websites from group get the summary time limit from this group.<br>
					E.g. if you set  3h for "wikipedia" group so
					the totally summary time using of websites from this group
					(www.wikipedia.eu + www.wikipedia.com + www.wikipedia.org)
					is 3h (not 3 h for each website from group) per day.<br><br>
					Additionally we recommend to use '*.youtube.com' notation instead
					'https:\\www.youtube.com' for websites.<br>
					In this case all subdomens on youtube (e.g. video.youtube.com, games.youtube.com ...) will be time limited too.
					</p>
				</div>
			</li>
			<li class='item' id="17A">
				<div class='q'>
					I would like for example to allow a user to have 1 hour internet time/day, but only 30 min of Facebook. How I can set this up?
				</div>
				<div class='a'>
					  <p>1. Open page "Browser time limitation" for this user and set 1 hour time limitation.
					  </p>
					  <p>2. Open page "Black and white lists of internet sites" and add "*.facebook.com" to "Black list".<br>
								<br>
					  Press button "Time limit" (at right) and set 30 min time limitation for this website.
					  </p>
					  <p>3. If you use version &lt;3.15 then check option "Allow only Internet Explorer (IE) using" on page "Internet filter".</p>
				</div>
			</li>
			<li class='item' id='18A'>
				<div class='q'>
					My husband has been unable to access the internet using Internet Explorer.
					His account is set as a Boss account and there are no Time Boss restrictions on it. Why?
				</div>
				<div class='a'>
					<p>Please open TB Event log and check how TB determine your husband - may be
					as Someone - then edit husband user name in TB (the right user name you can
					see in the Event log in the Someone Logon event ).
					<br>
					<br>
					If all is ok with user name  - then check the TB Internet filter for your husband.<br>
					<br>
					Maybe the "Allowed Internet sites (White list)" is not empty. <br>
					<br>
					If so - only websites
					from "White list" are allowed.</p>
				</div>
			</li>
			<li class='item' id='45'>
				<div class='q'>
					Is there a way that you can lock the internet (IE zero time) except for 1 or
		2 allowed internet sites that can have unlimited time?
				</div>
				<div class='a'>
					<p>Yes, to do that (one way...):
					<br>
					<br>
					1. Open Time Boss <b>Control panel</b>.
					<br>
					<br>
					2. Add your allowed websites (for example "*.google.com") to table <b>Allowed Internet sites (White list)</b> 
					on panel <b>Black and white lists of internet sites</b> for the needed user.<br>
					Also you can set time limitation for thise websites - press button <b>Time limit</b>.<br>
					<br>
					3. Check option <b>Allow only Internet Explorer (IE)</b> using on page <b>Internet filter</b>.<br><br>
					4. Close Time Boss <b>Control panel.</b>			<br>
					<br>
					5.Restart IE (if it is opened)<br>
					<br>
					Only IE will be allowed to browse web without time limitation
					and only your chosen websites and the default home page will be allowed in IE.</p>
				</div>
			</li>
			<li class='item' id='160915C'>
				<div class='q'>
					How to allow in White list the HTML files from the local folder on PC (son learns HTML)?
				</div>
				<div class='a'>
					<p>You should add the needed folder (e.g. d:/123) in the <b>White list</b> twice (one is valid for IE  and one for others browsers):<br><br>
					http://d:/123<br>
					http://file:///d:/123
					</p>
				</div>
			</li>
			<li class='item' id='170303A'>
				<div class='q'>
					I want my KIDs account to can always open any internet browser (for HTML learning purposes),but I want to can use internet ONLY from 16:00 to 18:00 every day including weekends.
				</div>
				<div class='a'>
					<p>TB limits by time all web-browsers without taking into account internet is used (web-sites) or not (local html files on PC).<br><br>
					If you know the name of local folder with HTML files so you can use <b>Black and White lists of web-sites</b> in TB.
					In this case activate the White list, set needed time limit  (from 16:00 to 18:00) for all web-sites and
					24:00 time limit for local folder (d:\TEST) with HTML files. See <a href="screenshots/tb_white_list.png">here</a>.<br>
					<br>
					Web-browser time limit should be 24:00 (not limited) in this case.
					</p>
				</div>
			</li>
			<li class='item' id='18B'>
				<div class='q'>
					Can I block Firefox (Edge, Chrome, Opera...)?
				</div>
				<div class='a'>
					<p>Of course you can limit the Firefox (Edge, Chrome, Opera...) using time.<br>
					<br>
					Since version 3.15 Time Boss supports all browsers. So the <b>Black and White lists of websites</b>, 
					the time limitation of websites and websites monitoring are working in all browsers.<br>
					<br>
					The Internet filter of bad words is active in IE only.<br>
					With Time Boss you can disable all  browsers except Internet Explorer if needed<b>(Internet Filter-&gt;Allow only Internet Explorer (IE) using</b>).</p>
				</div>
			</li>
			<li class='item' id='18C'>
				<div class='q'>
					It is possible to stop use of Metro programs and Metro IE in Windows 8?
				</div>
				<div class='a'>
					<p>Yes, you can add Metro programs in Black list (see <a href="screenshots/tb_win8_bl.jpg">picture</a>).<br>
					If needed you can get time limitation for this programs.<br>
					You can disable IE in Metro at all for your kid using option <b>Disable IE in Metro mode</b> on panel <b>Internet filter</b>.<br>
					But this option is available only since version 3.07.002.		  </p>
				</div>
			</li>
			<li class='item' id='19'>
				<div class='q'>
					I'm using other internet-guardian program, can I use Time Boss? 
				</div>
				<div class='a'>
					<p>Yes, you can. <br>
					In this case please open <b>Control panel-&gt;Options-&gt;Internet filter-&gt;Internet monitor</b> and uncheck <b>Enable</b> option. </p>
				</div>
			</li>
			<li class='item' id='111213C'>
				<div class='q'>
					On one PC internet filter doesn't work...
				</div>
				<div class='a'>
					<p>Please open in IE <b>Tools-&gt;Manage Add-ons-&gt;Toolbars and Extensions</b>
					and check -  is "Time Boss IE monitor" enabled or not.<br>
					If it is not enabled - enable it and restart IE.<br>
					<br>
					Additionally check in Time Boss:<br>
					1.Is Time Boss IE Monitor active or not (<b>TB-&gt;Control panel-&gt;Options-&gt;Internet filter-&gt;Internet monitor</b>)<br>
					2.The name of the user is correct in Time Boss or not (see the LogOn event in event log)
					</p>
				</div>
			</li>
			<li class='item' id='140418'>
				<div class='q'>
					I have set the 'forbidden words and phrases' internet filter off 'sex' (rather it is in the default list).  
					However, when I checked on the screenshot at the event log, I found my boy searched for the word 'sex' using Google Search. It leads him to www.cosmopolitan.com.  Why is that so?
				</div>
				<div class='a'>
					<p>May be google.com or this website is "home page" in IE, in this case set another website (e.g. www.cnn.com) as Block page in TB
					(<b>TB-&gt;Control panel-&gt;Options-&gt;Internet filter-&gt;Internet monitor-&gt;Use website as "Block page"</b>)<br>
					May be kid uses IE InPrivate mode, in this case disable using IE In Private mode for him (<b>TB-&gt;Internet filter-&gt;Disable  "InPrivate" mode in IE</b>).
					<br>
					Also see <a href="http://nicekit.com/tbfaq.htm#111213C">here</a> and <a href="http://nicekit.com/tbfaq.htm#131227A">here</a></p>
				</div>
			</li>
			<li class='item' id='131227'>
				<div class='q'>
					I use Windows 8.1. Why Time Boss IE monitor can not be installed in Internet Explorer?
				</div>
				<div class='a'>
					<p>Please download and install Time Boss (Pro) version 3.09 and above. How to upgrade is <a href="#13">here</a>.
					</p>
				</div>
			</li>
			<li class='item' id='131227A'>
				<div class='q'>
					Why Time Boss IE monitor does not work on Windows 8.1 (no filtering, no internet events in events log)?
				</div>
				<div class='a'>
					<p>This problem can be only on Windows 8.1 and above.<br> 
					Firstly disable option "Enable Enhanced Protected Mode" in Internet Explorer 
					<b>(IE-&gt;Tools-&gt;Internet Options-&gt;Advanced-&gt;Security)</b>. See <a href="screenshots/tb_win81_EPM_ext.jpg">picture</a>. 
					<br>
					<br>
					Microsoft disables this option automatically in last Security Update for Internet Explorer.<br>
					See here (<a href="https://technet.microsoft.com/en-us/security/bulletin/ms13-088">Microsoft Security Bulletin MS13-088</a>).<br>
					<br>
					If the problem is not solved check the Time Boss (Pro) version.
					If you have version 3.08.XXX and below then upgrade Time Boss (Pro) to vesrion 3.09 and above please.
					How to upgrade is <a href="#13">here</a>.
					</p>
				</div>
			</li>
			<li class='item' id='20151102A'>
				<div class='q'>
					I already use NetNanny 6.5 (their older version that still allowsme to manage the kid's NetNanny like local program's that use networktraffic access settings remotely via the internet). Can I disable theinternet protection module of Time Boss Pro? I want to use Time Boss tocontrol Windows login access time windows, durations, programs that involvenetwork traffic, ect.?
				</div>
				<div class='a'>
					<p>Please uncheck the option <b>Enable</b> on the panel <b>Options-&gt;Internet monitor-&gt;Internet monitor</b> and restart the PC.
					In this case TB internet monitor will be disabled  totally.
					</p>
				</div>
			</li>
		</ol>
		<div class="headline">
			How to limit games (programs, folders)
		</div>
		<ol>
			<li class='item' id='35'>
				<div class='q'>
					How can I limit the time that a concrete program works? 
				</div>
				<div class='a'>
					<p>Please, open <b>Black and white lists of programs</b> page. Then <a href="screenshots/tb_program_bwl.jpg">add needed program</a> or program folder. Push the button <b>Program time limit </b> and set the time limits. </p>
					<p>You can  edit names of programs and folders on the panel <b>Black list</b>.<br>
					You can have short names of programs (without full path) in <b>Black list</b>. So all programs with the same names will be restricted, without folder dependence.</p>
				</div>
			</li>
			<li class='item' id='160714'>
				<div class='q'>
					How to get grants for games from Black or white lists in kid's session?
				</div>
				<div class='a'>
					<p>Please activate the option - <b>Show Black and white lists in Sub. session</b> <br>
					(TB-&gt;Control panel-&gt;Options-&gt;General-&gt;Miscellaneous).<br><br>
					In this case kid can see programs from <b>Black and white list</b> and can use grant for any of programs (button with Clock at right).
					</p>
				</div>
			</li>
			<li class='item' id='160329'>
				<div class='q'>
					I was wondering if there is an easy to way to do a report of all of the applications used that counted against the user on a particular day? 
					For example, it would be good to be able to say/see, you had 2 hours of usage and you used 90 minutes on Minecraft and the other 30 minutes on League of Legends.
				</div>
				<div class='a'>
					<p>
					There are two ways.<br><br>
					1. You can use the diagram of day in the event log (the check box at the left bottom corner).
					The hint of each program contains the info about total used time.<br><br>
					2. You can use the page <b>Statistics</b> in the event log. Please select the type of statistics:
					<b>Text</b> and  <b>program stat(istics)</b>.
					</p>
				</div>
			</li>
			<li class='item' id='35A'>
				<div class='q'>
					How can I block java games?
				</div>
				<div class='a'>
					<p>Java games use javaw.exe or java.exe files. <br>
					So you should block or limit this files - javaw.exe and java.exe.
					<br>
					<br>
					We recommend to add the short files names: javaw.exe and java.exe manually (TB-&gt;Control panel-&gt;Black white list-&gt;Add program-&gt;
					Any programs-&gt;Add program manually) without full path (c:\Program files...). <br>
					Then give needed time limitation for this files.<br><br> If that do not take effect then
					activate the option <b>Sys.programs</b> on the Event log panel for needed user in TB Control panel.<br>
					In this case you will see the real used exe file (java) when game is active in the event log.
					</p>
				</div>
			</li>
			<li class='item' id='20171202'>
				<div class='q'>
					How can I block Minecraft game?
				</div>
				<div class='a'>
					<p>The new version of Minecraft game uses Minecraft.Windows.exe file. <br>
					The old version of Minecraft game is java game and uses file javaw.exe (or java.exe).<br>
					So you should block or limit this files - Minecraft.Windows.exe or javaw.exe (or java.exe).
					<br>
					<br>
					We recommend to add the short file name: Minecraft.Windows.exe (or javaw.exe or java.exe) manually (TB-&gt;Control panel-&gt;Black white list-&gt;Add program-&gt;
					Any programs-&gt;Add program manually) without full path (c:\Program files...). <br>
					Then give needed time limitation for this file(s).<br><br> 
					</p>
				</div>
			</li>
			<li class='item' id='35B'>
				<div class='q'>
					How can I block online games e.g. Runeescape?
				</div>
				<div class='a'>
					<p>The game like Runeescape uses the client program on kids PC - JagexLauncher.exe.
					<br>
					<br>
					So you can add this program to Time Boss programs Black/White list  and set for this program needed time limitation.
					(Open TB Contol panel  -&gt; kids Black/White list panel -&gt; press Add program button at right - &gt;
					Select this program  - JagexLauncher.exe - on the panel "From Windows start menu")
					<br>
					<br>
					See<a href="screenshots/tb_online_games.jpg"> picture</a>.
					</p>
				</div>
			</li>
			<li class='item' id='150211'>
				<div class='q'>
					How can I block Steam games?
				</div>
				<div class='a'>
					<p>Usually it is necessary to add to the Black list the file steam.exe (Steam Client Bootstrapper)
					from folder C:\Program Files\Steam or from folder C:\Program Files (x86)\Steam.<br><br>
					But sometimes that's not enough, the fact that this file run sometimes only a few seconds before the game, 
					then it can stop and get control to the game.<br><br>
					Therefore, if necessary, add to the Black list needed "steam" games. 
					Usually they are in the folder C:\Program Files\Steam\steamapps\common.
					The easy way to do that - to add this games to the Black list from the Event log: 
					open the Event log of the child for the day, select needed executable files of games, click right Mouse button
					and choose <b>Add to Black list</b>.<br><br>
					You can set needed time limitation for games in the Black list.
					In this case disable or delete the file steam.exe (Steam Client Bootstrapper) from the Black list
					</p>
				</div>
			</li>
			<li class='item' id='20171008'>
				<div class='q'>
					How can I block old Roblox games?
				</div>
				<div class='a'>
					<p>The website "roblox.com" is needed for starting of games only.<br>
					The main part on Roblox games is the file <b>RobloxPlayerBeta.exe</b> on Windows 10.<br>
					So you should add it to <b>B/W list of programs</b> and get it needed time limitation.<br>
					When this game is active you can add this file to <b>B/W list of programs</b> in TB using
					<b>Currently running</b> panel in <b>Select programs</b> dialog.<br>
					<br>
					If you have several versions of Roblox apps installed on PC, so add the Roblox folder (by default it is "C:\Users\YOUR_KID_USERNAME\AppData\Local\Roblox") 
					to <b>B/W list of programs</b> and get it needed time limitation.
					</p>
				</div>
			</li>
			<li class='item' id='20171211'>
				<div class='q'>
					How can I block BlueStacks games?
				</div>
				<div class='a'>
					<p>Usually it is necessary to add to the <b>Black list of program</b> the folders with BlueStacks engine.
					By default the folders are C:\ProgramData\Bluestacks and(or) C:\Program Files (x86)\Bluestacks.<br>
					<br>
					Also you can add this games to the Black list from the <b>Event log</b>: 
					open the Event log of the child for the day, select BlueStacks engine exe file 
					(C:\ProgramData\Bluestacks\Client\BlueStacks.exe or C:\Program Files (x86)\Bluestacks\HD-Frontend.exe),
					click right Mouse button and choose <b>Add to Black list</b>.<br>
					<br>
					You can set needed time limitation for games in the Black list.
					In this case disable or delete the folders with BlueStacks engine from the Black list		  </p>
				</div>
			</li>
			<li class='item' id='121213B'>
				<div class='q'>
					How can I block old DOS games?
				</div>
				<div class='a'>
					<p>Old DOS games use the program ntvdm.exe in  Windows 7 (8).<br><br>
					So you can add this program С:/Windows/System32/ntvdm.exe <br>
					to Time Boss programs Black/White list and set for this program needed time limitation.
					</p>
				</div>
			</li>
			<li class='item' id='140218A'>
				<div class='q'>
					How to limit online browsers games, e.g. Legend: Legacy of the Dragons?
				</div>
				<div class='a'>
					<p>This game is browsers game.<br>So you should add the internet site of this game to 
					<b>Black and white lists of internet sites</b> and limit it by time (button with clock at right).<br>
					<br>
					If you use Time Boss version &lt;3.15 then additionally activate the option <b>Allow only Internet Explorer using</b> on the panel <b>Internet filter</b>. 
					This prevent to use all browsers except Internet Explorer.<br>
					<br>
					If you want to time limit the game "Legend: Legacy of the Dragons" so add the internet site *.warofdragons.com to 
					<b>Black and white lists of internet sites</b> and limit it by time.
					</p>
				</div>
			</li>
			<li class='item' id='170807'>
				<div class='q'>
					How to add all Windows Metro Applications to a group?
				</div>
				<div class='a'>
					<p>Please open the Time Boss Event log after using any of Windows Metro applications and check the folder that use this applications -
					C:\Program Files\MetroApps by default.<br>
					Add this folder to needed group. 
					</p>
				</div>
			</li>
			<li class='item' id='36'>
				<div class='q'>
					How the user with Subordinate rights can view the remaining time for a program from a black list? 
				</div>
				<div class='a'>
					<p>The user can see this data from popup menu on Time Boss icon in system tray. Menu <b>My time limit </b> -&gt; 
					<b>Black and white lists of programs</b> -&gt; column <b>Last remaining time</b>.<br>
					<br>
					Please check the option<b> Show black and white lists in Sub.session</b> on panel <b>Options-&gt;General</b><b>-&gt;Miscellaneous</b> </p>
				</div>
			</li>
			<li class='item' id='49'>
				<div class='q'>
					I have just installed the trial version of Time Boss.<br> 
					The children are reporting that some games (such as Harry Potter) are aborted when Time Boss displays the 5 minute warning. <br>
					Thus they are unable to save and exit properly. Is there a way around this?
				</div>
				<div class='a'>
					<p>When the warning appears, Windows switch from the game to the warning window. <br>
					<br>
					Kid can use Alt+Tab to return to the game.
					<br>
					<br>
					To prevent this issue you can use warning only as sound (Miscellaneous-&gt;Warning-&gt;System beep).<br>
					<br>
					This sound will be played directly in the game.</p>
				</div>
				</div>
			</li>
			<li class='item' id='50'>
				<div class='q'>
					I would like to purchase that program, but first I wonder if it is possible to set a limit for a set of programs as a whole. 
					It doesn't make any sense to limit amount of time allotted to a single program if kid can play another one.
					Is it possible to create a time pool/schedule and associate programs with this pool/schedule?
				</div>
				<div class='a'>
					<p>
					Yes, it is possible.
					<br>
					<br>
					Open panel Program White and Black list for needed user.
					<br>
					Add a new group (button Add group at right).
					<br>
					Add needed games or a whole folder with games to this group.
					<br>
					Set the time limitation for this group (button Time limitation at right).
					<br>
					<br>
					So all programs from this group and all program from folders in this group
					will be limited with one time restriction 
					(for example, kid can play any games from the defined group for 2 hours of total time).</p>
				</div>
			</li>
			<li class='item' id='53'>
				<div class='q'>
					How do I block the DOS COMMAND LINE (CMD.exe) and RUNAS.exe?
				</div>
				<div class='a'>
					<p>Please set <b>Disable Run from Start menu</b> option in TB <b>Control panel-&gt;System protection</b> for your kid (since ver 2.491). Or add this programs in Black list. </p>
				</div>
			</li>
			<li class='item' id='31'>
				<div class='q'>
					How can I hide my folders (with files and subfolders)? 
				</div>
				<div class='a'>
					<p>Please select needed user who shouldn't be allowed to see the content of your folders. Open the <b>System protection </b> panel and add needed folders to <b>Folders protection </b> table. </p>
				</div>
			</li>
			<li class='item' id='20151102'>
				<div class='q'>
					On my kid's PC, clicking Start Menu (Windows 10) doesn't work. 
					The Windows 10 start menu appears for a few seconds, then disappears.
				</div>
				<div class='a'>
					<p>If you use the <b>White list of programs</b> (<b>TB-&gt;Control panel-&gt;Kid-&gt;Black and white lists</b>)
					then add the folder "C:\Windows" to this list (<b>Add folder</b> button at the right) 
					and reopen the Windows session. </p>
				</div>
			</li>
		</ol>

		<div class="headline">
			Event log, screenshots and statistics
		</div>

		<ol>
			<li class='item' id='21'>
				<div class='q'>
					Where can I view screenshots? 
				</div>
				<div class='a'>
					<p>Please open the page <b>Screenshots </b> in <b>Event Log</b>. </p>
				</div>
			</li>
			<li class='item' id='21A'>
				<div class='q'>
					How to receive screenshots and event log on my email automatically?
				</div>
				<div class='a'>
					<p>Please open the page <b>Mail notification</b> in <b>Options</b> window.</p>
					Please input the recipients email address (or list of addresses separated by semicolons) in <b>TO</b> field on panel <b>Recipient</b>.
					<br>
					<br>
					A list of e-mail addresses that receive a carbon copy (CC) you can define in box CC.
					<br>
					<br>
					On panel Mail server (SMTP) settings specify the settings of your email server.
					<br>
					<br>
					You can use а public email server (e.g. if you have account on yahoo.com, please use smtp.mail.yahoo.com) or email server in your internal network (e.g. mail.office.lan).<br>
					<br>
					More information about public email servers (SMTP) is on internet sites of these servers.
					<br>
					<br>
					If you want to send screenshots from this PC - activate the check box <b>Enable</b> on panel <b>Send screenshots</b>.
					<br>
					<br>
					If you want to send the event log from this PC - activate the check box<b> Enable</b> on panel <b>Send event log</b>.
					<br>
					<br>
					If the Screenshot option is not active for some users, screenshots will not be sent.
					<br>
					<br>
					<br>
					E.g. you want to receive screenshots and event log to your email address 'mike@yahoo.com', so see this image:
					<p align='center'><img src='pics/tb_email_587_yahoo.jpg' width='561' height='526'></p>
					<br>
					<p>
					If email is not sent - check installed antivirus and firewall please.<br><br>
					Attention! The computer name should be in English letters only!
					How to change computer name is <a href='http://windows.microsoft.com/en-us/windows/change-computer-name#1TC=windows-7'>here</a>.
					</p>
					<p>Your password is needed to send email using your email server (SMTP) only.<br>
					Create a new account on Gmail and use it if needed.</p>
				</div>
			</li>
			<li class='item' id='21B'>
				<div class='q'>
					How to send screenshots to Gmail (or other email)?
				</div>
				<div class='a'>
					<p>Please try to send screenshots using the Google email service (www.gmail.com).<br>
					So create new Google email (or use an existing) and set TB settings as <a href='screenshots/tb_email_587_google.jpg'>here</a><br>
					<br>
					You can try to send screenshots using the Yahoo email service too.<br> So create new Yahoo email and set TB settings as <a href='screenshots/tb_email_587_yahoo_google.jpg'>here</a>          <br>
					<br>
					Then set in TO: field your real Gmail (or other email) address.<br>
					<br>
					If you use the smtp.gmail.com and receive the error messaage '
					The SMTP server requires a secure connection or the client was not authenticated. 
					The server response was: 5.5.1 Authentication Required' then enable 'Less Secure Sign-In' in your google account. After sign into google account, 
					go to: <a href='https://www.google.com/settings/security/lesssecureapps'>https://www.google.com/settings/security/lesssecureapps</a></p>
				</div>
			</li>
			<li class='item' id='21C'>
				<div class='q'>
					How to disable the taking of screenshots?
				</div>
				<div class='a'>
					<p>Please open Time Boss <b>Control panel</b>, select needed user and disable option  <b>Screenshots</b> in <b>Event log</b> group.
				</p>
				</div>
			</li>
			<li class='item' id='150325'>
				<div class='q'>
					Screenshots do not saved in kids session. Why?
				</div>
				<div class='a'>
					<p>May be the Windows TEMP folder is full. Please delete all files from it.<br><br>
					By default TEMP folder is:<br>
					C:\Users\Kid\AppData\Local\Temp.<br>
					Select all files and folder from this folder and press <b>Delete</b>.
					If Windows can not delete some files  - skip them.<br><br>
					This folder can be hidden in Windows.
					In this case <br>
					1. Open Explorer (<b>Start-&gt;All programs-&gt;Accessories-&gt;Windows Explorer</b>)<br>
					2. Open menu item <b>Menu-&gt;Organize-&gt;Folder and search options</b><br>
					3. Open panel <b>View</b>, set <b>Show hidden files</b> in <b>Advanced settings</b> list<br>
					After deleting set 'hidden' option back.
					</p>
				</div>
			</li>
			<li class='item' id='21D'>
				<div class='q'>
					Sometimes when I check the screen captures, they are black. Why?
				</div>
				<div class='a'>
					<p>Some games (media players) has internal protection to avoid taken screenshots. In this case screenshots will be black...
				</p>
				</div>
			</li>
			<li class='item' id='22'>
				<div class='q'>
					Where can I view statistics? 
				</div>
				<div class='a'>
					<p>Please open the page <b>Statists </b> in <b>Event Log</b>. </p>
					<p>The <b>Statistics </b> is based on <b>Event log</b>. If the <b>Event log </b> is clear - the <b>Statistics </b> will be clear to. </p>
				</div>
			</li>
			<li class='item' id='23'>
				<div class='q'>
					Where can I view summary time statistics for day, week, month? 
				</div>
				<div class='a'>
					<p>Please open the page <b>Total statists </b> in <b>Event Log</b>. </p>
					<p>The <b>Total statistics </b> is based on <b>Event log</b>. If the <b>Event log </b> is clear - the <b>Total statistics </b> will be clear to. </p>
				</div>
			</li>
			<li class='item' id='23A'>
				<div class='q'>
					Are there statistics which sum the full work time with any selected program during a day?
				</div>
				<div class='a'>
					<p>Yes, of course. Please open <b>Event log</b>-&gt;panel <b>Statistics</b> and check options
					<b>Text</b> and <b>Programs stat.</b> at right.</p>
				</div>
			</li>
			<li class='item' id='24'>
				<div class='q'>
					Why I view incorrect summary time on statistics page? 
				</div>
				<div class='a'>
					<p>It seems that this user (kid) changed the Windows system time during work on PC or abnormality shutdown PC. You can check that in <b>Event Log</b>. </p>
				</div>
			</li>
			<li class='item' id='46'>
				<div class='q'>
					Can I see statistics for a  previous month?
				</div>
				<div class='a'>
					<p>If you want the program to log events (and save statistics) more than one month, then increase the number of days for event log saving  (TB-&gt;Control panel-&gt;Options-&gt;Log file-&gt;Save messages in log last ... days).</p>
				</div>
			</li>
			<li class='item' id='46A'>
				<div class='q'>
					Why is it that my “Save messages in log lasts 30 days”, but the Event History only shows 6 or 7 days? Can I view the 30 day logs some other way?
				</div>
				<div class='a'>
					<p>Please, open TB Event log window and select item 'Event log' on left panel.<br>
					On right panel on top clear 'User','From date' and 'To date' text boxes and click button 'Refresh'.<br>
					So you can see all events in your log.<br><br>
					All events are in the simple text file time_boss.log (it is read-only). You can open this file with Notepad.<br>
					<br>
					30 days is default length for the Event log.<br>
					You can change this setting here: TB Control panel-&gt;Options window-&gt;Log file panel.
					</p>
				</div>
			</li>
			<li class='item' id='46B'>
				<div class='q'>
					How to reset time statistics?
				</div>
				<div class='a'>
					<p>If you delete all messages from event log (TB-&gt;Control panel-&gt;Options-&gt;Event log-&gt;Clear all) - all statistics will be lost.</p>
				</div>
			</li>
			<li class='item' id='26'>
				<div class='q'>
					How can I save data from Event log or Statistics pages? 
				</div>
				<div class='a'>
					<p>Select the needed data and copy it (Crtl+C). Open any text editor (Notepad, MS Word, MS Excel...) and paste data (Ctrl-V). Save the file. </p>
				</div>
			</li>
			<li class='item' id='29'>
				<div class='q'>
					How to copy data from Event log or Statistics pages? 
				</div>
				<div class='a'>
					<p>Select needed lines using Ctrl, Shift button and Mouse. Push Ctrl-C (Ctrl-Insert). </p>
					<p>If the pasted text contains the wrong chars then switch the language to national language in Time Boss before copying. </p>
				</div>
			</li>
			<li class='item' id='30'>
				<div class='q'>
					Why Notepad and others systems programs are absent in Event log? 
				</div>
				<div class='a'>
					<p>Time Boss doesn't trace the programs from Windows system folders (Notepad is a system program) if toggle <b>Log sys. programs </b> in <b>Log panel </b> is disabled (by default). </p>
				</div>
			</li>
			<li class='item' id='27'>
				<div class='q'>
					How to save screenshot to my file? 
				</div>
				<div class='a'>
					<p>Select the needed screenshot and press right button of mouse on picture - the <b>Save Picture ... </b> popup menu will be opened, or use button <b>Save as file</b>. </p>
				</div>
			</li>
			<li class='item' id='140418D'>
				<div class='q'>
					How can I see screenshots of the second monitor?
				</div>
				<div class='a'>
					<p>You can see screenshots of the second monitor in the same screenshots log. This screenshots have the time by one minute longer than screenshots of the first monitor.<br>
				</p>
				</div>
			</li>
			<li class='item' id='28'>
				<div class='q'>
					Where located the screenshots files? 
				</div>
				<div class='a'>
					<p>The folder Screenshots contains the folders with screenshots files. The everyday has the folder with name like '01-01-2005'. </p>
					<p>Each
					screenshots is the JPG image file with name like '14-30-34.jpg'. The
					size of file is about 150KB for the screen with resolution 1280*1024
					(32b colors). So the folder for one day can has size about 10MB... The
					program automatically delete old screenshots, please see Screenshots
					panel in <b>Options. </b></p>
					<p>You can manually delete don't needed or old screenshots files. </p>
				</div>
					<ol type='a'>
						<li class='item' id='28a'>
							<div class='q'>
								How to protect screenshots files?  
							</div>
							<div class='a'>
								<p> You can add the folder with screenshots (\Time Boss\Screenshots) to table <b>Folder protection</b> on the panel <b>System protection</b>.<br>
								<br>
								Press button<b> Disable</b> on pane <b>Protection</b> (Options window) for access to screenshots folder for  Boss users.</p>
							</div>
						</li>
					</ol>
				</div>
			</li>
			<li class='item' id='32'>
				<div class='q'>
					Where user with Subordinate rights can view his time-table and statistics? 
				</div>
				<div class='a'>
					<p>The user can see this data from popup menu on Time Boss icon in system tray. Menu-&gt;My time limitation.</p>
				</div>
			</li>
			<li class='item' id='39'>
				<div class='q'>
					How to use Backup Folder for screen shots? 
				</div>
				<div class='a'>
					<p>If you define a folder, the program will write screenshots to this folder as well. </p>
					<p>This
					will allow you to view on the one (parental) computer all screenshots
					that are taken on the other PCs. Of course you 'll have to install TB
					on all computers you are using.. </p>
					<p>To do it, you have </p>
					<p>1. To give full access (make share) to the screenshot folder on the parental PC (Time Boss/Screenshots) for other computers. </p>
					<p>2. Then to choose this folder as a Backup folder on the other computers. </p>
				</div>
			</li>
			<li class='item' id='170728'>
				<div class='q'>
					I'd like to save screenshots to a different folder/drive than the one used by TimeBoss; is that possible?
				</div>
				<div class='a'>
					<p>Yes.<br>Open <b>Time Boss-&gt;Control panel-&gt;Options-&gt;General</b> panel and select options <b>Backup</b> and <b>Screenshots only to backup</b>. Select needed folder. See <a href='screenshots/tb-parental-control-ssfolder.png'>here</a>.<br> Please note, this folder will be not protected by TB, you can not see screenshots from Time Boss Event log window.
					</p>
				</div>
			</li>
			<li class='item' id='170729'>
				<div class='q'>
					If I uninstall TimeBoss from c: drive and then reinstall on a different drive (eg. e:), will the screenshots save to the e: drive?
				</div>
				<div class='a'>
					<p>Yes.<br>Time Boss saves all screenshots in folder Screenshots in Time Boss folder by default. This folder will be protected by TB. You can see this screenshots in the Time Boss Event log window.
					</p>
				</div> 
			</li>
		</ol>

		<div class="headline">
			Time Boss protection, anti-virus settings
		</div>

		<ol>
			<li class='item' id='9'>
				<div class='q'>
					&nbsp;Can I stop Time Boss? 
				</div>
				<div class='a'>
					<p>You should open <b>Options </b>and push the button <b>Prepare for uninstall</b>. The Time Boss will be stopped. But after restart of PC Time Boss will run again.</p>
				</div>
			</li>
			<li class='item' id='10'>
				<div class='q'>
					The users with Subordinate rights can stop time_boss.exe from Taskmanager, is it normal?  
				</div>
				<div class='a'>
					<p>The
					all limitations functions are provided by the service time_boss_s.exe.
					It is protected and nobody can stop it (except users with Boss rights).
					The time_boss.exe is only small part of Time Boss which indicates
					remaining time for Subordinate users. So, users can stop time_boss.exe
					with no expected effect.</p>
				</div>
			</li>
			<li class='item' id='1OA'>
				<div class='q'>
					&nbsp;How secure is Time Boss?
				</div>
				<div class='a'>
					<p>Time Boss uses the official protections service of Windows system.
					<br>
					<br>
					Time Boss has internal protection against:
					uninstalling,
					time changing by kind,
					process killers programs,
					removing in Windows Safe mode
					and others.
					<br>
					<br>
					You can use Time Boss  in case if kind has administrators' rights in Windows too.
					<br>
					<br>
					Time Boss doesn't create espionage modules masking in components of Windows.<br>
					Time Boss doesn't litter system folders, register, doesn't reduce the working speed of other programs.
					</p>
				</div>
			</li>
			<li class='item' id='37'>
				<div class='q'>
					Is it possible to prevent Time Boss from deinstalling (or deleting its components) in Safe Mode? 
				</div>
				<div class='a'>
					<p>Yes, it is. </p>
					<p>Please use this option <b>TB-&gt;Control panel-&gt;Options-&gt;General-&gt;Protection-&gt;Protect in Safe Mode</b>.</p>
					<!--
					<p>Since version 3.16 Time Boss can work in Windows Safe Mode 
					<b>(TB->Control panel->Option->General->Protection->Run in Safe Mode)</b>.</p>
					-->
					<p>In old versions please open <b>TB-&gt;Control panel-&gt;Options</b> Safe Mode Protect  and push <b>Enable</b>. Setting the protection can take few minutes. </p>
					<p>Notice, that the user with Administrator rights has a possibility to remove the protection. 
					</p>
					<p>If the <b>Safe Mode protection</b> is active, the program can be stopped after installation of the new "big" Windows 10 updates (Microsoft releases the "big" update once per year usally. 
					E.g. Windows 10 version 1511 build 10586 November 2015 update or 1607 August 2016). The "big" Windows 10 update can not reinstall it correctly and stops it.<br>
					In this case uninstall the program before Windows 10 update and install the program (you can download the setup file from our site) 
					again in the old folder. <br>
					All Time Boss (Pro) settings, screenshots and logs will be saved. If the program was not uninstalled before Windows 10 update
					and the program do not work after Windows 10 update then uninstall the program using the Windows uninstalling wizard and 
					install the program (you can download the setup file from our site) again in the old folder. </p>
					<p>Please email us to us if any problem appears. We will help.</p>
				</div>
			</li>
			<li class='item' id='170626'>
				<div class='q'>
					Is it possible to use Time Boss (Pro) in Safe Mode?
				</div>
				<div class='a'>
					<p>May be the best way is to forrbid the Safe Mode for users. You can google how to do that.<br> 
					<br>
					We do not recommend to use Time Boss in Safe Mode.<br>Your antivirus will block Time Boss.      
					<br>
					<br>
					But Time Boss (Pro) can work in Safe Mode.<br>
					At first add Time Boss folder to list of trusted folder in your antivirus if needed.<br>
					Then download <a href="download/start-time-boss-in-safe-mode.txt">this simple text file</a> (or copy the content from it to any empty text file) 
					and change the file extention of this file from 'txt' to 'reg', then start (dbl-click) it.
					The Administrator rights will be needed.<br>
					<br>
					This file adds to Windows register two keys needed to start Time Boss (Pro) in Safe Mode. You should delete this keys manually if needed.
					</p>
				</div>
			</li>
			<li class='item' id='15A'>
				<div class='q'>
					Is there a way to block access to the Time Boss Screenshots windows folder?
				</div>
				<div class='a'>
					<p>Time Boss Screenshots and Logs folders are protected in kids session.
					<br>
					<br>
					If kid try to open this folders (directly, or by typing Url in Explorer) 
					appears 'Access is denied' message.
					<br>
					<br>
					The main TB folder is not protected by default. It is only hidden in Explorer.
					<br>
					But all important files are protected in main TB folder. So kid can not delete or rename this files.
					<br>
					<br>
					You can put the main TB folder in  <b>Protected folders</b>  list  (TB-<b>Control panel-Kid-System protection</b>) for kid.
					<br>
					But in this case TB indication window can be not opened by kid (from Window menu), with remainig time willbe all OK.
					<br>
					<br>
					Screenshots and events will be saved in any case.
					You can put any folders in <b>Protected folders</b> list for kid
					and try open it in kids session (after logoff-login).
					</p>
				</div>
			</li>
			<li class='item' id='25'>
				<div class='q'>
					My kid change system time on PC. How can I forbid that? 
				</div>
				<div class='a'>
					<p>Please open the panel <b>System protection </b> for this user and check options "Protect system Date and Time". These options need LogOn/LogOff to take effect. </p>
				</div>
			</li>
			<li class='item' id='140418C'>
				<div class='q'>
					My son changes PC time in BIOS, what can I do?
				</div>
				<div class='a'>
					<p>You can set the password on BIOS.<br>
					Additionally you can activate the option <b>Synchronize time in Sub. session with time server</b> 
					on panel <b>TB-&gt;Control panel-&gt;Options-&gt;General-&gt;Miscellaneous</b>.
					</p>
				</div>
			</li>
			<li class='item' id='121213A'>
				<div class='q'>
					Sysinternal Process Explorer can stop Time Boss?
				</div>
				<div class='a'>
					<p>Time Boss stops Sysinternal Process Explorer in Subordinate sessions.<br>
					You can add any "bad" program in <b>Black list</b> for kid if needed.</p>
				</div>
			</li>
			<li class='item' id='37A'>
				<div class='q'>
					Can my anti-virus program stop Time Boss (Pro)?
				</div>
				<div class='a'>
					<p>Most popular anti-viruses (except Avast!) are compatible with Time Boss (Pro)
					and you can use Time Boss (Pro) without problems.<br>
					<br>
					But if TB does not work and you use anti-virus program,
					please add Time Boss (Pro) modules (<b>time_boss.exe, time_boss_s.exe, time_boss_m.mik</b>)
					in the list of trusted programs (if it exists) in your anti-virus program.</p>
					<p>If you use Kaspersky Anti-Virus in "hard" mode
					then open the window "Trusted zone" in it 
					(Kaspersky -&gt; Settings -&gt; Advanced Settings -&gt; Threats and Exclusions -&gt; button "Settings" on Exclusions panel) and
					add the folder with Time Boss to the list "Exclusions rules".<br>
					<br>
					Please see the <a href="screenshots/kaspersky_trusted.jpg">picture</a>.
					</p>
				</div>
			</li>
			<li class='item' id='37AA'>
				<div class='q'>
					Can "Avast!" or Norton Antiviruses stop Time Boss (Pro)?
				</div>
				<div class='a'>
					<p>If you have the last version of <b>Norton</b> Antivirus then 
					restore the file <b>time_boss_s.exe</b> from <b>Quarantine</b> if needed and restart the PC again. 
					(Open Norton Security -&gt; Security -&gt; History -&gt; 
					select item time_boss_s.exe (Sonar...) Quarantined -&gt; 
					select 'Options' as Recommended Action -&gt; Select 'Restore &amp; exclude this file' -&gt; 
					select 'Yes' in Quarantine Restore -&gt; Close Norton Security) <br>
					<br>
					If you have the last version of<b> Avast!</b> Antivirus then stop it
					for a few minutes, 
					install (repair) Time Boss, 
					add files <b>time_boss_s.exe,
					time_boss.exe</b> and <b>time_boss.mik</b> to the list of exclusions in Avast!
					(Avast -&gt; Open Avast! user interface -&gt; Settings -&gt; Antivirus -&gt; Exclusions)
					and start Avast! again.</p>
					<p>By default Avast runs Time Boss modules in the "Sandbox". But Time Boss cannot work in this "Sandbox"...<br>
					<br>
					If you have installed <b>Avast!</b> Antivirus <b>ver. 9</b>, 
					then open the window <b>Exclusions</b> in it (<b>Avast  User interface -&gt; Settings -&gt; 
					Active Protection -&gt; File System Shield -&gt; Exclusions</b>) 
					and add the folder where Time Boss installed (e.g. c:\Program Files\Time Boss) to the list of 
					<b>Exclusions</b>, press OK and reboot the computer.<br>
					<br>
					Pease see the<a href="screenshots/tb_avast_09.jpg"> picture</a>.<br>
					<br>
					If you have installed <b>Avast!</b> Antivirus <b>ver. 8</b>, 
					then open the window <b>Global Exclusions</b> in it (<b>Avast  User interface -&gt; Settings (at top-right) -&gt; Global Exclusions</b>) 
					and add the folder where Time Boss installed (e.g. c:\Program Files\Time Boss) to the list of 
					<b>Exclusions</b>, then reboot the computer.<br>
					<br>
					Pease see the<a href="screenshots/tb_avast_exclude_en.jpg"> picture</a>.<br>
					<br>
					If you have installed <b>Avast!</b> Antivirus <b>ver. 7 </b>,please open the window <b>AutoSandbox</b> in Avast (<b>Avast -&gt; Real-Time Shields -&gt; File System Shield -&gt; 
					Expert Settings -&gt; Exclusions</b>) and add the folder where Time Boss installed (e.g. c:\Program Files\Time Boss\*) 
					to the list of<b> Exclusions</b>, then reboot the computer.          
					</p><p>Pease see the<a href="screenshots/avast_sandbox_exc.jpg"> picture</a>.</p>
					If this does not work, then an additional open the window <b>AutoSandbox</b> in Avast (<b>Avast -&gt; Real-Time Shields -&gt; File System Shield -&gt; Expert Settings -&gt; AutoSandbox</b>) and add files "time_boss_s.exe", "time_boss_m.mik", "time_boss.exe" (from Time Boss folder) to the list <b>Files that will be excluded from automatic sandboxing</b>, then reboot the computer.
					<p>Pease see the<a href="screenshots/avast_sandbox.jpg"> picture</a>.</p>
					If this does not work, then an additional open the window<b> Exclusions</b> in Avast 
					<b>(Avast -&gt; Additional protection -&gt; Sandbox -&gt; Expert Settings -&gt; Exclusions</b>) and add the folder where Time Boss installed (e.g. c:\Program Files\Time Boss\*) 
					to the list of <b>Exclusions</b>, then reboot the computer.
					<p>Pease see the<a href="screenshots/avast_sandbox_main.jpg"> picture</a>. </p>
				</div>
			</li>
			<li class='item' id='20171203A'>
				<div class='q'>
					My son stops TB using process blocker program. How can I fobidd that?
				</div>
				<div class='a'>
					<p>You should add this process blocker program to <b>B/W list on programs</b> in TB.<br>
					You can open the TB <b>Event log</b>, find the start event of this process blocker program
					and using popup menu (Right Mouse click) add this process blocker program
					to <b>B/W list on programs</b> for your son.
					</p>
				</div>
			</li>
			<li class='item' id='37B'>
				<div class='q'>
					Does not Log Off when time expired...
					When the time reaches 1 minute, the icon in the system tray and the desktop notification both blink "1", but the computer never logs off...
				</div>
				<div class='a'>
					<p>
					Please check your AntiVirus program and add Time Boss modules
					(<b>time_boss.exe, time_boss_s.exe, time_boss_e.dll, time_boss_m.mik</b>)
					in the list of trusted programs in your AntiVirus program.
					</p>
				</div>
			</li>
			<li class='item' id='140513'>
				<div class='q'>
					I've noticed that sometimes my son is logged in and Time Boss will stop running. Rebooting will start it
					up again, but could you consider running some type of agent that would restart it automatically, in cases where it exits
					unexpectedly?
				</div>
				<div class='a'>
					<p>The main part of Time Boss  (time_boss_s.exe) is the Windows service.<br>
					It is hidden process and it restarts automatically himself.<br>
					<br>
					May be your son stops the user interface of this service - time_boss.exe?<br>
					So it is "normal". Please see<a href="http://nicekit.com/tbfaq.htm#10"> here</a>.

					<br>
					<br>
					May be your son uses special process killer program (you can see it in the TB event log) -
					in this case add this programs to Black list in Time Boss.

					Please see <a href="http://nicekit.com/tbfaq.htm#121213A">here</a>. <br>
					<br>
					May be your son changes PC time in BIOS...
					Please see <a href="http://nicekit.com/tbfaq.htm#140418C">here.</a></p>
				</div>
			</li>
			<li class='item' id='131212'>
				<div class='q'>
					My son has adminstartors rights in Windows and can change the Administrator's password. 
					How can I forbid that?
				</div>
				<div class='a'>
					<p>Please set the Subordinate rights for Someone and Administrator with zero time limit.<br>
					In this case - Administrator and all new added users in Windows will be stopped.<br><br>
					The Time Boss password for access to TB Control panel in this case 
					(<b>Time Boss-&gt;Control panel-&gt;Options-&gt;Password</b>).<br>
					With this password you can open Time Boss Control panel from any Windows user (in kids session too).<br>
					Please notice, TB should have at least one user with Boss rights - so add the new ANY user (not defined in Windows)
					in TB and set him Boss rights.
					</p>
				</div>
			</li>
			<li class='item' id='131227B'>
				<div class='q'>
					How to disable Windows command line (cmd.exe) for kid?
				</div>
				<div class='a'>
					<p>Please activate option <b>Disable Run from Start Menu</b> on panel <b>Time Boss-&gt;Control panel-&gt;System protection</b> for kid.<br>
					Or add the file C:\Windows\System32\cmd.exe in <b>Black list</b>.
					</p>
				</div>
			</li>
			<li class='item' id='131227C'>
				<div class='q'>
					How to disable Windows Microsoft Management Console (mmc.exe) for kid?
				</div>
				<div class='a'>
					<p>Please add the file C:\Windows\System32\mmc.exe in <b>Black list</b>.</p>
				</div>
			</li>
			<li class='item' id='140206'>
				<div class='q'>
					What can I do if kid uses a screen saver as a desktop background?
				</div>
				<div class='a'>
					<p>Please open TB <b>Control panel-&gt;Options-&gt;General-&gt;Miscellaneous</b> and activate the option <b>Screen saver does not stop the timer</b>.
					</p>
				</div>
			</li>
			<li class='item' id='161109'>
				<div class='q'>
					What can I do if screen saver does not stop the timer?
				</div>
				<div class='a'>
					<p>Please open TB <b>Control panel-&gt;Options-&gt;General-&gt;Miscellaneous</b> and disable the option <b>Screen saver does not stop the timer</b>.<br>
					Plese check, may be the monitor dimms when screensaver is active. In this case activate the option <b>On resume, display logon screen</b> in Windows
					<b>Mouse right click on Windows desktop-&gt;Personalize-&gt;Screen saver</b>.
					</p>
				</div>
			</li>
		</ol>

		<div class="headline">
			Additional Time Boss settings
		</div>

		<ol>
			<li class='item' id='1D'>
				<div class='q'>
					&nbsp;Is password case sensitivity?
				</div>
				<div class='a'>
					<p>No, password is not case sensitivity.</p>
				</div>
			</li>
			<li class='item' id='20'>
				<div class='q'>
					What is "Stealth" mode? 
				</div>
				<div class='a'>
					<p>The <b>"Stealth" mode </b> disables the icon of Time Boss in system tray (defined user wouldn't see Time Boss components). </p>
				</div>
			</li>
			<li class='item' id='51B'>
				<div class='q'>
					How to hide Time Boss icon in system tray?
				</div>
				<div class='a'>
					<p>Please activate <b>Stealth</b> mode for kid (<b>Time Boss-&gt;Control panel-&gt;Kid-&gt;Miscallaneous</b>)</p>
				</div>
			</li>
			<li class='item' id='40'>
				<div class='q'>
					How to open Control panel if I selected Hide in Configuration menu?
				</div>
				<div class='a'>
					<p>Please start Time Boss from windows menu (windows button Start-&gt;Programs-&gt;Time Boss-&gt;Time Boss) or run time_boss.exe from Time Boss folder.</p>
				</div>
			</li>
			<li class='item' id='130927'>
				<div class='q'>
					How to disable this big numbers in the screen corner?
				</div>
				<div class='a'>
					<p>Please use the check box "Stealth" mode (panel Miscellaneous-&gt;Extended) 
					for disable big numbers at all.<br>
					Additionally you can change the time in option <b>Show countdown window before ... mins</b>. </p>
				</div>
			</li>
			<li class='item' id='13B'>
				<div class='q'>
					&nbsp;On what basis does Time Boss calculate the time a user is using a computer (e.g. internal clock, time server etc.)?
				</div>
				<div class='a'>
					<p>Time Boss uses the local PC internal clock.<br>
					<br>
					Time Boss has the protection against time change and the automatically time synchronization (every in two minutes)
					with Internet time server (<b>Control panel-&gt;Options-&gt;Synchronize time with time server:</b>) for Subordinate users.</p>
				</div>
			</li>
			<li class='item' id='14AA'>
				<div class='q'>
					How the time per week is calculated and how the check boxes of weekend (Fr.Sa.So) work...
				</div>
				<div class='a'>
					<p>Per week time limit set the total free time for all week days (Monday ... Sunday). Without
					per day time limitation.<br>
					<br>
					Weekend check boxes (<b>Control panel-&gt;Options-&gt;Weekends</b>) used only if Per day time limit is active. <br>
					<br>
					In this case they get the possibility
					to add additional time on each weekend automatically.</p>
				</div>
			</li>
			<li class='item' id='140418E'>
				<div class='q'>
					Where kid can see the remaining time of week?
				</div>
				<div class='a'>
					<p>Please see <a href="screenshots/tb_week_remaining_time.jpg">pic.1</a>, <a href="screenshots/tb_week_remaining_time_2.jpg">pic.2</a> and <a href="screenshots/tb_week_remaining_time_3.jpg">pic.3</a>. This feature was added since version 3.11.
					</p>
				</div>
			</li>
			<li class='item' id='14A'>
				<div class='q'>
					I just saw on screenshot we can put half time or 15 minutes in the time table. 
					Is it only a Time Boss Pro feature or we can do that in Time Boss basic?
				</div>
				<div class='a'>
					<p>It's basic feature since version 2.39. Please use Crtl+Mouse Click.</p>
				</div>
			</li>
			<li class='item' id='52'>
				<div class='q'>
					When my Son goes on his account, it logs him right off again, even if he has time left.  I cannot see any settings that would affect this...
				</div>
				<div class='a'>
					<p>May be you have activate TB <b>Forced breaks </b> option for your Son.
					<br>
					<br>
					In this case TB prevent open next session of user if "Break time" (default 10 min) is not ended.<br>
					<br>  
					So simple disable this option (TB<b> Control panel -&gt; Computer time limitation</b> for your son -&gt; <b>Forced breaks</b> -&gt; uncheck Enable).</p>
				</div>
			</li>
			<li class='item' id='140422'>
				<div class='q'>
					Is there any way to modify, personalize, or disable Windows Screen Saver?
				</div>
				<div class='a'>
					<p>Time Boss (Pro) activates the Windows Screen Saver automatically 
					(kid can start it directly from Time Boss), so you can not disable it at all.
					<br>
					But you can choose the 1000 minutes (or more) waiting time interval of Screen Saver, so this
					Screen Saver will be not started automatically at all.
					<br>
					How to do that: press right Mouse button on the Windows desktop, select <b>Personalize-&gt;Screen Saver</b>
					and in opened window select 1000 minutes as <b>Wait</b> interval.
					</p>
				</div>
			</li>
			<li class='item' id='170303B'>
				<div class='q'>
					How to stop TB counting down if mouse and keyboard are not used for, say, 5 minutes?
				</div>
				<div class='a'>
					<p>You can use the Windows screen saver option to activate it after 5 mins pause in activity,
					or you can activate the Windows "dim" display option, in both cases TB stops the timer.
					</p>
				</div>
			</li>
			<li class='item' id='170303C'>
				<div class='q'>
					Can you please tell me how to access the control panel or options button from a running TB on a windows 10 tablet?
				</div>
				<div class='a'>
					<p>You should use the TB password to access to TB Control panel from kid's session.
					There is the button at bottom left on the window with kid settings to launch TB Control panel.
					</p>
				</div>
			</li>
			<li class='item' id='151223'>
				<div class='q'>
					How to set the various time limit per each day of the week?
				</div>
				<div class='a'>
					<p>This feature is active only for versions &gt;3.15.<br>
					Please disable the option <b>per DAY</b> and click by mouse on the time limit per each day below.<br>
					In the opened window you can set the needed time limitation. See <a href="screenshots/tb_time_limitation_tt.jpg">here</a>.
					</p>
				</div>
			</li>
		</ol>
	</div>

<? 

include 'footer.php';

?>
