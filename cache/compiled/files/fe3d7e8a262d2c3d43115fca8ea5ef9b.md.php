<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/02.portfolio/03.home-lab/default.md',
    'modified' => 1772690210,
    'size' => 8379,
    'data' => [
        'header' => [
            'title' => 'Home Lab',
            'template' => 'homelab',
            'fullwidth' => true,
            'summary' => 'Infrastructure documentation examples for my personal project, Cranberrylabs.net.',
            'header_image' => 'homelab.jpg',
            'projects' => [
                0 => [
                    'id' => 'bright-pale',
                    'title' => 'Bright/Pale VM Architecture — Media Isolation',
                    'tags' => [
                        0 => 'Docker',
                        1 => 'WireGuard',
                        2 => 'Proxmox',
                        3 => 'Security'
                    ],
                    'description' => 'Designed and implemented a two-VM architecture on the Petal node to isolate download activity from media serving. violet-bright handles clean serving (Jellyfin, Caddy, Sonarr library management) while violet-pale handles all download-side operations (qBittorrent, Sonarr indexing, Jackett) with all egress routed through a Mullvad WireGuard tunnel. A kill switch ensures that if the VPN tunnel drops, violet-pale loses internet access entirely rather than falling back to clearnet.',
                    'learned' => 'Learned how to reason about network-level isolation as a security property rather than just a convenience. Routing all egress through a VPN with a kill switch is straightforward in WireGuard config but requires thinking carefully about what happens on failure. Also reinforced the value of separating concerns at the VM boundary as if violet-pale were ever compromised or misbehaving, violet-bright and everything else on the network is unaffected.',
                    'snippets' => [
                        0 => [
                            'label' => 'WireGuard kill switch — PostUp/PreDown rules (violet-pale)',
                            'code' => '[Interface]
Address = 10.x.x.x/32
PrivateKey = <private_key>
DNS = 10.x.x.x

PostUp = iptables -I OUTPUT ! -o %i -m mark ! --mark $(wg show %i fwmark) -m addrtype ! --dst-type LOCAL -j REJECT
PreDown = iptables -D OUTPUT ! -o %i -m mark ! --mark $(wg show %i fwmark) -m addrtype ! --dst-type LOCAL -j REJECT

[Peer]
PublicKey = <mullvad_peer_key>
AllowedIPs = 0.0.0.0/0, ::/0
Endpoint = <mullvad_endpoint>:51820
'
                        ]
                    ]
                ],
                1 => [
                    'id' => 'proxmox-cluster',
                    'title' => 'Three-Node Proxmox VE Cluster Build & Recovery',
                    'tags' => [
                        0 => 'Proxmox',
                        1 => 'HA',
                        2 => 'Cluster',
                        3 => 'Debian'
                    ],
                    'description' => 'Built a three-node Proxmox VE cluster (strand, petal, filament) running Debian 12 as the base OS. The cluster suffered a catastrophic failure caused by joining a node while HA was active, which split the quorum and took down the entire environment. Performed a full cluster rebuild from scratch, migrating all VMs and reconfiguring cluster networking, storage, and HA settings correctly.',
                    'learned' => 'Learned the hard way that Proxmox cluster operations require quorum to be in a known-good state first. HA and corosync are sensitive to the order of operations. The rebuild reinforced structured documentation habits: having a record of each VM config, network assignments, and storage layout made recovery significantly faster. Also migrated VMs from Ubuntu interim releases to Debian stable during the rebuild for better long-term support.',
                    'snippets' => [
                        0 => [
                            'label' => 'Check cluster quorum and node status',
                            'code' => 'pvecm status
pvecm nodes
'
                        ],
                        1 => [
                            'label' => 'Force quorum on surviving node after split (emergency only)',
                            'code' => '# Only run if quorum is lost and you are sure of the state
pvecm expected 1
'
                        ]
                    ]
                ],
                2 => [
                    'id' => 'wireguard-vpn',
                    'title' => 'Self-Hosted WireGuard Remote Access VPN',
                    'tags' => [
                        0 => 'WireGuard',
                        1 => 'Networking',
                        2 => 'VPN',
                        3 => 'Port Forwarding'
                    ],
                    'description' => 'Deployed a dedicated WireGuard VPN server on violet-vpn (172.12.10.7) to allow secure remote access to the homelab from outside the LAN. Configured split tunneling so that LAN-destined traffic routes through the tunnel while internet traffic exits locally on the remote client. Port forwarded the WireGuard UDP port at the router and integrated with the Cloudflare DDNS setup so the endpoint address stays current despite a dynamic public IP.',
                    'learned' => 'Gained practical experience with WireGuard key management, peer configuration, and the difference between full-tunnel and split-tunnel setups. Split tunneling requires careful AllowedIPs configuration on the client, only the LAN subnet needs to be in AllowedIPs rather than 0.0.0.0/0. Also reinforced how DDNS and port forwarding interact: the endpoint in the WireGuard peer config uses the dynamic DNS hostname, not a raw IP.',
                    'snippets' => [
                        0 => [
                            'label' => 'Server config — violet-vpn (/etc/wireguard/wg0.conf)',
                            'code' => '[Interface]
Address = 191.70.1.1/24
ListenPort = 51820
PrivateKey = <server_private_key>

PostUp   = iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE
PreDown  = iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o eth0 -j MASQUERADE

[Peer]
PublicKey = <client_public_key>
AllowedIPs = 191.70.1.2/32
'
                        ],
                        1 => [
                            'label' => 'Client config — split tunnel to LAN only',
                            'code' => '[Interface]
Address = 191.70.1.2/24
PrivateKey = <client_private_key>
DNS = 172.12.10.6

[Peer]
PublicKey = <server_public_key>
AllowedIPs = 172.12.10.0/24, 191.70.1.0/24
Endpoint = vpn.cranberrylabs.net:51820
PersistentKeepalive = 25
'
                        ]
                    ]
                ],
                3 => [
                    'id' => 'caddy-reverse-proxy',
                    'title' => 'Caddy Reverse Proxy with Let\'s Encrypt SSL',
                    'tags' => [
                        0 => 'Caddy',
                        1 => 'SSL',
                        2 => 'Cloudflare',
                        3 => 'Let\'s Encrypt'
                    ],
                    'description' => 'Configured Caddy as a reverse proxy on violet-http to terminate SSL for the portfolio website and restrict admin access at the proxy level. SSL certificates are issued via Let\'s Encrypt using the Cloudflare DNS challenge, which avoids needing port 80 open for ACME validation. Added Fail2Ban to monitor Caddy logs and automatically ban IPs that trigger repeated auth failures.',
                    'learned' => 'Caddy\'s Caddyfile syntax makes reverse proxy config much simpler than equivalent Apache or Nginx config. Combining Caddy-level access restrictions with Fail2Ban creates two independent layers of protection that do not rely on the application itself.',
                    'snippets' => [
                        0 => [
                            'label' => 'Caddyfile — reverse proxy with LAN/VPN access restriction',
                            'code' => 'cranberrylabs.net {
  reverse_proxy localhost:8080
}

admin.cranberrylabs.net {
  @blocked not remote_ip 172.12.10.0/24 191.70.1.0/24
  abort @blocked
  reverse_proxy localhost:8081
}'
                        ],
                        1 => [
                            'label' => 'Global block — Let\'s Encrypt via Cloudflare DNS challenge',
                            'code' => '{
  acme_dns cloudflare {env.CF_API_TOKEN}
}
'
                        ]
                    ]
                ],
                4 => [
                    'id' => 'adds-setup',
                    'title' => 'Active Directory Domain Services — cranberrylabs.net',
                    'tags' => [
                        0 => 'Windows Server',
                        1 => 'ADDS',
                        2 => 'DNS',
                        3 => 'GPO'
                    ],
                    'description' => 'Deployed a Windows Server VM (violet-dc) as a domain controller for the cranberrylabs.net domain. Configured ADDS with a custom OU structure separating administrative accounts from standard users and security groups for RBAC. All LAN hosts point to violet-dc for internal DNS resolution. Applied Group Policy for password policy and account lockout thresholds.',
                    'learned' => 'Designing OU structure before deploying ADDS saves significant rework. Separating user accounts from groups into distinct OUs makes GPO scoping clean and predictable. Running a separate admin account from a daily-use account enforces least privilege in practice, not just on paper. Internal DNS through the DC means all hostnames resolve correctly on the LAN without needing hosts file entries on every machine.',
                    'snippets' => [
                        0 => [
                            'label' => 'PowerShell — create custom OU structure',
                            'code' => 'New-ADOrganizationalUnit -Name "VGroups" -Path "DC=cranberrylabs,DC=net"
New-ADOrganizationalUnit -Name "VOUs"    -Path "DC=cranberrylabs,DC=net"

New-ADOrganizationalUnit -Name "VAdministration" -Path "OU=VGroups,DC=cranberrylabs,DC=net"
New-ADOrganizationalUnit -Name "VUsers"          -Path "OU=VGroups,DC=cranberrylabs,DC=net"

New-ADOrganizationalUnit -Name "VAdministration" -Path "OU=VOUs,DC=cranberrylabs,DC=net"
New-ADOrganizationalUnit -Name "VUsers"          -Path "OU=VOUs,DC=cranberrylabs,DC=net"'
                        ]
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'Home Lab\'
template: homelab
fullwidth: true
summary: \'Infrastructure documentation examples for my personal project, Cranberrylabs.net.\'
header_image: homelab.jpg
projects:
    -
        id: bright-pale
        title: \'Bright/Pale VM Architecture — Media Isolation\'
        tags:
            - Docker
            - WireGuard
            - Proxmox
            - Security
        description: \'Designed and implemented a two-VM architecture on the Petal node to isolate download activity from media serving. violet-bright handles clean serving (Jellyfin, Caddy, Sonarr library management) while violet-pale handles all download-side operations (qBittorrent, Sonarr indexing, Jackett) with all egress routed through a Mullvad WireGuard tunnel. A kill switch ensures that if the VPN tunnel drops, violet-pale loses internet access entirely rather than falling back to clearnet.\'
        learned: \'Learned how to reason about network-level isolation as a security property rather than just a convenience. Routing all egress through a VPN with a kill switch is straightforward in WireGuard config but requires thinking carefully about what happens on failure. Also reinforced the value of separating concerns at the VM boundary as if violet-pale were ever compromised or misbehaving, violet-bright and everything else on the network is unaffected.\'
        snippets:
            -
                label: \'WireGuard kill switch — PostUp/PreDown rules (violet-pale)\'
                code: "[Interface]\\nAddress = 10.x.x.x/32\\nPrivateKey = <private_key>\\nDNS = 10.x.x.x\\n\\nPostUp = iptables -I OUTPUT ! -o %i -m mark ! --mark $(wg show %i fwmark) -m addrtype ! --dst-type LOCAL -j REJECT\\nPreDown = iptables -D OUTPUT ! -o %i -m mark ! --mark $(wg show %i fwmark) -m addrtype ! --dst-type LOCAL -j REJECT\\n\\n[Peer]\\nPublicKey = <mullvad_peer_key>\\nAllowedIPs = 0.0.0.0/0, ::/0\\nEndpoint = <mullvad_endpoint>:51820\\n"
    -
        id: proxmox-cluster
        title: \'Three-Node Proxmox VE Cluster Build & Recovery\'
        tags:
            - Proxmox
            - HA
            - Cluster
            - Debian
        description: \'Built a three-node Proxmox VE cluster (strand, petal, filament) running Debian 12 as the base OS. The cluster suffered a catastrophic failure caused by joining a node while HA was active, which split the quorum and took down the entire environment. Performed a full cluster rebuild from scratch, migrating all VMs and reconfiguring cluster networking, storage, and HA settings correctly.\'
        learned: \'Learned the hard way that Proxmox cluster operations require quorum to be in a known-good state first. HA and corosync are sensitive to the order of operations. The rebuild reinforced structured documentation habits: having a record of each VM config, network assignments, and storage layout made recovery significantly faster. Also migrated VMs from Ubuntu interim releases to Debian stable during the rebuild for better long-term support.\'
        snippets:
            -
                label: \'Check cluster quorum and node status\'
                code: "pvecm status\\npvecm nodes\\n"
            -
                label: \'Force quorum on surviving node after split (emergency only)\'
                code: "# Only run if quorum is lost and you are sure of the state\\npvecm expected 1\\n"
    -
        id: wireguard-vpn
        title: \'Self-Hosted WireGuard Remote Access VPN\'
        tags:
            - WireGuard
            - Networking
            - VPN
            - \'Port Forwarding\'
        description: \'Deployed a dedicated WireGuard VPN server on violet-vpn (172.12.10.7) to allow secure remote access to the homelab from outside the LAN. Configured split tunneling so that LAN-destined traffic routes through the tunnel while internet traffic exits locally on the remote client. Port forwarded the WireGuard UDP port at the router and integrated with the Cloudflare DDNS setup so the endpoint address stays current despite a dynamic public IP.\'
        learned: \'Gained practical experience with WireGuard key management, peer configuration, and the difference between full-tunnel and split-tunnel setups. Split tunneling requires careful AllowedIPs configuration on the client, only the LAN subnet needs to be in AllowedIPs rather than 0.0.0.0/0. Also reinforced how DDNS and port forwarding interact: the endpoint in the WireGuard peer config uses the dynamic DNS hostname, not a raw IP.\'
        snippets:
            -
                label: \'Server config — violet-vpn (/etc/wireguard/wg0.conf)\'
                code: "[Interface]\\nAddress = 191.70.1.1/24\\nListenPort = 51820\\nPrivateKey = <server_private_key>\\n\\nPostUp   = iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE\\nPreDown  = iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o eth0 -j MASQUERADE\\n\\n[Peer]\\nPublicKey = <client_public_key>\\nAllowedIPs = 191.70.1.2/32\\n"
            -
                label: \'Client config — split tunnel to LAN only\'
                code: "[Interface]\\nAddress = 191.70.1.2/24\\nPrivateKey = <client_private_key>\\nDNS = 172.12.10.6\\n\\n[Peer]\\nPublicKey = <server_public_key>\\nAllowedIPs = 172.12.10.0/24, 191.70.1.0/24\\nEndpoint = vpn.cranberrylabs.net:51820\\nPersistentKeepalive = 25\\n"
    -
        id: caddy-reverse-proxy
        title: \'Caddy Reverse Proxy with Let\'\'s Encrypt SSL\'
        tags:
            - Caddy
            - SSL
            - Cloudflare
            - \'Let\'\'s Encrypt\'
        description: \'Configured Caddy as a reverse proxy on violet-http to terminate SSL for the portfolio website and restrict admin access at the proxy level. SSL certificates are issued via Let\'\'s Encrypt using the Cloudflare DNS challenge, which avoids needing port 80 open for ACME validation. Added Fail2Ban to monitor Caddy logs and automatically ban IPs that trigger repeated auth failures.\'
        learned: \'Caddy\'\'s Caddyfile syntax makes reverse proxy config much simpler than equivalent Apache or Nginx config. Combining Caddy-level access restrictions with Fail2Ban creates two independent layers of protection that do not rely on the application itself.\'
        snippets:
            -
                label: \'Caddyfile — reverse proxy with LAN/VPN access restriction\'
                code: "cranberrylabs.net {\\n  reverse_proxy localhost:8080\\n}\\n\\nadmin.cranberrylabs.net {\\n  @blocked not remote_ip 172.12.10.0/24 191.70.1.0/24\\n  abort @blocked\\n  reverse_proxy localhost:8081\\n}"
            -
                label: \'Global block — Let\'\'s Encrypt via Cloudflare DNS challenge\'
                code: "{\\n  acme_dns cloudflare {env.CF_API_TOKEN}\\n}\\n"
    -
        id: adds-setup
        title: \'Active Directory Domain Services — cranberrylabs.net\'
        tags:
            - \'Windows Server\'
            - ADDS
            - DNS
            - GPO
        description: \'Deployed a Windows Server VM (violet-dc) as a domain controller for the cranberrylabs.net domain. Configured ADDS with a custom OU structure separating administrative accounts from standard users and security groups for RBAC. All LAN hosts point to violet-dc for internal DNS resolution. Applied Group Policy for password policy and account lockout thresholds.\'
        learned: \'Designing OU structure before deploying ADDS saves significant rework. Separating user accounts from groups into distinct OUs makes GPO scoping clean and predictable. Running a separate admin account from a daily-use account enforces least privilege in practice, not just on paper. Internal DNS through the DC means all hostnames resolve correctly on the LAN without needing hosts file entries on every machine.\'
        snippets:
            -
                label: \'PowerShell — create custom OU structure\'
                code: "New-ADOrganizationalUnit -Name \\"VGroups\\" -Path \\"DC=cranberrylabs,DC=net\\"\\nNew-ADOrganizationalUnit -Name \\"VOUs\\"    -Path \\"DC=cranberrylabs,DC=net\\"\\n\\nNew-ADOrganizationalUnit -Name \\"VAdministration\\" -Path \\"OU=VGroups,DC=cranberrylabs,DC=net\\"\\nNew-ADOrganizationalUnit -Name \\"VUsers\\"          -Path \\"OU=VGroups,DC=cranberrylabs,DC=net\\"\\n\\nNew-ADOrganizationalUnit -Name \\"VAdministration\\" -Path \\"OU=VOUs,DC=cranberrylabs,DC=net\\"\\nNew-ADOrganizationalUnit -Name \\"VUsers\\"          -Path \\"OU=VOUs,DC=cranberrylabs,DC=net\\""',
        'markdown' => ''
    ]
];
