
{!! '<?xml version="1.0" encoding="UTF-8"?>'  !!}
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>DurationUntilRemoval</key>
	<integer>{{ $profile['duration'] * 60 * 60 }}</integer>
	<key>PayloadContent</key>
	<array>
		<dict>
			<key>AutoJoin</key>
			<true/>
			<key>CaptiveBypass</key>
			<false/>
			<key>DisableAssociationMACRandomization</key>
			<false/>
			<key>EncryptionType</key>
			<string>Any</string>
			<key>HIDDEN_NETWORK</key>
			<false/>
			<key>IsHotspot</key>
			<false/>
			<key>Password</key>
			<string>{{$profile['wifi_password']}}</string>
			<key>PayloadDescription</key>
			<string>Configures Wi-Fi settings</string>
			<key>PayloadDisplayName</key>
			<string>Wi-Fi</string>
			<key>PayloadIdentifier</key>
			<string>com.apple.wifi.managed.EFC7931E-6FCB-4E2A-9FBC-2432DD68910B</string>
			<key>PayloadType</key>
			<string>com.apple.wifi.managed</string>
			<key>PayloadUUID</key>
			<string>EFC7931E-6FCB-4E2A-9FBC-2432DD68910B</string>
			<key>PayloadVersion</key>
			<integer>1</integer>
			<key>ProxyType</key>
			<string>None</string>
			<key>SSID_STR</key>
			<string>{{ $profile['wifi_ssid'] }}</string>
		</dict>
	</array>
	<key>PayloadDescription</key>
	<string>SnapMyWifi Wifi Profile, Enjoy sharing wifi with guests with a qr code without sharing your wifi password!</string>
	<key>PayloadDisplayName</key>
	<string>SnapMyWifi - {{$profile['wifi_ssid']}}</string>
	<key>PayloadIdentifier</key>
	<string>com.snapmywifi.{{$profile['wifi_ssid']}}</string>
	<key>PayloadOrganization</key>
	<string>SnapMyWifi</string>
	<key>PayloadRemovalDisallowed</key>
	<false/>
	<key>PayloadType</key>
	<string>Configuration</string>
	<key>PayloadUUID</key>
	<string>D705A28C-CDD8-47F7-BA15-808D22BD8289</string>
	<key>PayloadVersion</key>
	<integer>1</integer>
</dict>
</plist>
