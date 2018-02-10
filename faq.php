<? 

include 'header.php';

?>

	<div class='faq-page'>
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

	</div>

<? 

include 'footer.php';

?>
