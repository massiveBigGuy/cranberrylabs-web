<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/02.portfolio/02.academic-works/default.md',
    'modified' => 1772675410,
    'size' => 20987,
    'data' => [
        'header' => [
            'title' => 'Academic Works',
            'template' => 'academic',
            'summary' => 'A collection of coursework, projects, and academic achievements from my Computer Systems Technology diploma.',
            'header_image' => 'academic.jpg',
            'categories' => [
                0 => [
                    'name' => 'Networking',
                    'id' => 'networking',
                    'projects' => [
                        0 => [
                            'id' => 'net-1',
                            'title' => 'Capstone Project Fall 2024, Data Communications 2',
                            'tags' => [
                                0 => 'STP',
                                1 => 'Switching',
                                2 => 'VLAN'
                            ],
                            'description' => 'Group work - Our Data Communications II class focused heavily on switching concepts like STP and VLANS, and this project was our first tangible experience using lab equipment to build real enterprise networks. This project was particularly challenging because it included an understanding of basic routing to complete.',
                            'learned' => 'This project was complicated for my skill level at the time. We needed to implement port security, etherchannel between two office buildings and configure a DHCP server. We segmented the network with VLANs and configured dual ISP failover. We made a lot of mistakes in this project, including messing up our addressing table so it didn\'t work at first, implementing VLANs incorrectly on the wrong interfaces, and our router didn\'t work for most of the project. However this project taught me to have patience with my work and have a better mental understanding of the overall network schema.',
                            'screenshots' => [
                                0 => 'net1-screenshot1.jpg',
                                1 => 'net1-screenshot2.jpg'
                            ],
                            'configs' => [
                                0 => [
                                    'label' => 'Building 1 - BD1 Switch',
                                    'code' => 'interface Port-channel1
 switchport trunk native vlan 24
 switchport trunk allowed vlan 10,20,24,30,40,50
 switchport mode trunk
 switchport nonegotiate
interface GigabitEthernet1/0/2
 switchport trunk native vlan 24
 switchport trunk allowed vlan 10,20,24,30,40,50
 switchport mode trunk
 switchport nonegotiate
 switchport port-security violation protect
 switchport port-security mac-address sticky
 switchport port-security mac-address sticky 38f3.ab13.23b3
 switchport port-security aging time 60
 switchport port-security
 channel-group 1 mode active
interface GigabitEthernet1/0/3
 switchport access vlan 20
 switchport mode access
 switchport nonegotiate
 switchport port-security violation protect
 switchport port-security mac-address sticky
 switchport port-security mac-address sticky 38f3.ab13.23b3
 switchport port-security aging time 60
 switchport port-security
 channel-group 1 mode active
'
                                ],
                                1 => [
                                    'label' => 'Building 2 - BD2 Switch',
                                    'code' => 'interface Port-channel1
 switchport trunk native vlan 24
 switchport trunk allowed vlan 10,20,24,30,40,50
 switchport mode trunk
 switchport nonegotiate
interface GigabitEthernet1/0/2
 switchport trunk native vlan 24
 switchport trunk allowed vlan 10,20,24,30,40,50
 switchport mode trunk
 switchport nonegotiate
 channel-group 1 mode active
interface GigabitEthernet1/0/3
 switchport trunk native vlan 24
 switchport trunk allowed vlan 10,20,24,30,40,50
 switchport mode trunk
 switchport nonegotiate
 channel-group 1 mode active
'
                                ]
                            ]
                        ],
                        1 => [
                            'id' => 'net-2',
                            'title' => 'Capstone Project Winter 2025, Data Communications 3',
                            'tags' => [
                                0 => 'Multi-site',
                                1 => 'Routing',
                                2 => 'VPN'
                            ],
                            'description' => 'Group work - For our winter 2025 capstone project we were tasked with designing a network with two sites connected through an ISP router with encrypted communications using a GRE tunnel, implementing OSPF, configuring ACLs to secure the network and implementing NAT. Our chosen implementation involved three routers; SecureNet, SafeTech and TelCom, and a fourth router was provisioned but not configured called ISP2 as a backup option for the company. A loopback address was configured on the ISP router to simulate a remote webserver endpoint.',
                            'learned' => 'Utilizing the GRE tunnel and ACL rules for secure connections, this project taught lessons about efficient address usage, and verifying correct information. Several times our GRE tunnel ended up in a state where it was quasi-working, where each endpoint could contact each other but nobody could each the web server. These sorts of technical troubleshooting processes have taught me a lot about persistence.',
                            'screenshots' => [
                                0 => 'net2-screenshot1.jpg',
                                1 => 'net2-screenshot2.jpg',
                                2 => 'net2-screenshot3.png',
                                3 => 'net2-screenshot4.png'
                            ],
                            'code' => ''
                        ],
                        2 => [
                            'id' => 'net-3',
                            'title' => 'Final Case Study Fall 2025 - VoIP',
                            'tags' => [
                                0 => 'VoIP',
                                1 => 'SIP',
                                2 => 'FreePBX'
                            ],
                            'description' => 'Group work - Throughout this VoIP course we explored configuring PBX servers and calling through them using SIP trunking and dial peers. In this final case study, our group was tasked with meeting a business need for a multi-site VoIP system. The two branch offices were connected via the Headquarters router and each site had it\'s own PBX server to serve clients locally, and a SIP trunk was configured to allow inter-PBX calls. Each site was configured with two Linphone softphones for testing purposes.',
                            'learned' => 'FreePBX OS has quite a learning curve to it, and when combining three PBX instances together across a network it can introduce some issues. Linphones would register to the wrong instances, or DHCP would not be functioning however after correcting some minor issues with our configuration our design held up to the challenge presented and all phones could contact one another.',
                            'screenshots' => [
                                0 => 'net3-screenshot1.png',
                                1 => 'net3-screenshot2.jpg',
                                2 => 'net3-screenshot3.jpg',
                                3 => 'net3-screenshot4.png'
                            ],
                            'code' => ''
                        ]
                    ]
                ],
                1 => [
                    'name' => 'Security',
                    'id' => 'security',
                    'projects' => [
                        0 => [
                            'id' => 'sec-1',
                            'title' => 'Capstone Project Fall 2025 - Security 1',
                            'tags' => [
                                0 => 'Cisco',
                                1 => 'Firewall',
                                2 => 'VPN'
                            ],
                            'description' => 'Group work - A small business called Mastermind IT Services requires a site-to-site IPSec VPN for their business operations. This VPN was implemented using Cisco Firepower 1010 devices on a custom network built for MITS. Four endpoints were used to verify end-to-end connectivity and test the DMZ functionality required by the company.',
                            'learned' => 'Using the Cisco Firepower devices, I learned to configure security groups, security zones and NAT rules alongside reinforcing existing concepts for access control lists and DMZ isolation. The web server in this case proved interesting as because our Firepower was using a fake ISP stand-in with a loopback at the other end to simulate our backend, it was looking for updates to rules. We found out that sometimes in a lab environment, the best update mode is off.',
                            'screenshots' => [
                                0 => 'sec1-screenshot1.jpg',
                                1 => 'sec1-screenshot2.jpg',
                                2 => 'sec1-screenshot3.jpg',
                                3 => 'sec1-screenshot4.jpg'
                            ],
                            'code' => ''
                        ]
                    ]
                ],
                2 => [
                    'name' => 'Systems Administration',
                    'id' => 'sysadmin',
                    'projects' => [
                        0 => [
                            'id' => 'sys-1',
                            'title' => 'Final Project Winter 2025 - Network Administration 1',
                            'tags' => [
                                0 => 'Active Directory',
                                1 => 'DNS',
                                2 => 'DHCP'
                            ],
                            'description' => 'For this project I was tasked with creating a simple Active Directory domain using Windows Server 2022 GUI. I configured spencer.com, added some users (including a non root admin user) and created a nested network fileshare with NTFS permissions configured. On one of the servers IIS was configured along with an iSCSI virtual disk for easy sharing across the network. On the domain controller, DNS and DHCP roles were configured.',
                            'learned' => 'Many existing concepts were reinforced with continual good practice, such as configuring a non root admin user, file share permissions, and Windows Server ADDS and IIS configuration. During this particular project, my VMWare vNet corrupted and needed to be reset which was a learning experience unto itself.',
                            'screenshots' => [
                                0 => 'sys1-screenshot1.jpg',
                                1 => 'sys1-screenshot2.png'
                            ],
                            'code' => ''
                        ],
                        1 => [
                            'id' => 'sys-2',
                            'title' => 'Administering and Monitoring Project Summer 2025 - Network Administration 2',
                            'tags' => [
                                0 => 'Remote Admin',
                                1 => 'ADCS',
                                2 => 'GPO'
                            ],
                            'description' => 'A basic network was built and used as a baseline for GPO configurations to be tested, certificates to be deployed, monitored by remote tools like Windows Admin Centre and RSAT. Disk quotas and data deduplication were configured on NTFS file shares for company use. Four VMs would be used for this project. Three would be servers with the ADDS, DNS, DHCP, ADCS and File Server roles, with an admin workstation added for remote adminisitration.',
                            'learned' => 'Windows Server ADCS can be difficult to use, but eventually I got the hang of template deployment. Core skills were refined further, adding complexity with RSAT and WAC tool.s Though this project was run on VMWare workstation, students were prevented from using the console to access servers, instead after post installation tasks were performed remote administration was configured.',
                            'screenshots' => [
                                0 => 'sys2-screenshot1.jpg',
                                1 => 'sys2-screenshot2.png',
                                2 => 'sys2-screenshot3.png',
                                3 => 'sys2-screenshot4.png',
                                4 => 'sys2-screenshot5.png'
                            ],
                            'code' => ''
                        ],
                        2 => [
                            'id' => 'sys-3',
                            'title' => 'Storage Management Project Summer 2025 - Linux 2',
                            'tags' => [
                                0 => 'Linux',
                                1 => 'SSH',
                                2 => 'LVM'
                            ],
                            'description' => 'In this project, a storage layout was planned manually for later LVM implementation. A second storage drive was added repliicating the first to combine the two drives using LVM. User disk quotas were used to ensure compliance with write policy. Implementing the layout, each drive was about 20 GiB and was mounted before the LVM was created.',
                            'learned' => 'This specific project took a bit of practice on different vmdisks but learning to correctly partition and plan a harddisk layout has allowed me to apply that thinking to other OS like Windows, and to keep my storage layout in mind including file systems. In this project, I decided to go with 4 partitions, with 3 dedicated to file needs and 1 for swap.',
                            'screenshots' => [
                                0 => 'sys3-screenshot1.png',
                                1 => 'sys3-screenshot2.png',
                                2 => 'sys3-screenshot3.png',
                                3 => 'sys3-screenshot4.png',
                                4 => 'sys3-screenshot5.png'
                            ],
                            'code' => ''
                        ],
                        3 => [
                            'id' => 'sys-4',
                            'title' => 'Failover Clustering Summer 2025 - Virtualization',
                            'tags' => [
                                0 => 'HyperV',
                                1 => 'Cluster',
                                2 => 'SAN'
                            ],
                            'description' => 'Using a small network created locally on our VMWare workstation hosts, I needed to create a failover cluster using Windows Server 2022 and a HyperV environment. An ADDS environment was used in the background to provide DNS services; needed for HyperV and two HyperV servers were used as access nodes. A drive was configured on the domain controller which would act as an iSCSI target for the SAN used to host ISO images and vmdisks for the HyperV servers. Features such as multipath I/O, and failover clustering were installed on both HyperV servers.',
                            'learned' => 'Virtualization technology can be finnicky and in this project the most issues I experienced were due to the Windows environment not playing nicely with running nested virtualization roles. I overcame these issues with careful workarounds, some involving bypassing core isolation to make it function. Once the servers were functional with the HyperV roles it was a matter of creating the SAN which was important for the cluster, and bringing the volumes online and adding them to the failover cluster. Most of these tasks were GUI related, but having hands on experience with these virtualization tools was invaluable.',
                            'screenshots' => [
                                0 => 'sys4-screenshot1.png',
                                1 => 'sys4-screenshot2.jpg',
                                2 => 'sys4-screenshot3.jpg',
                                3 => 'sys4-screenshot4.jpg'
                            ],
                            'code' => ''
                        ],
                        4 => [
                            'id' => 'sys-5',
                            'title' => 'Final Project Summer 2025 - Virtualization',
                            'tags' => [
                                0 => 'HyperV',
                                1 => 'Replica',
                                2 => 'Active Directory'
                            ],
                            'description' => 'Group work - HyperV Replica is a feature of Windows Server HyperV which allows for the replication of virtual machines across the intranet or internet. Replica is primarily a disaster recovery tool used for quick response to workload disruption, and in this project we were tasked with demonstrating a live migration of a HyperV VM from one simulated site to another using our lab LAN. This allowed for an emulated network layer between our VMWare Workstation clients to provide some friction for the replica.',
                            'learned' => 'HyperV Replica was straightforward to configure. The primary focus of this project was the research about the protocols and process involved, specifically during the live migration we gained an appreciation for the complexity required to move operating systems with ease. Most of our learning was done in the configuration steps, where we configured multi-path I/O and Replica. We also learned that should the VM experience a failure an administrator would need to intervene to manually invoke the replication, which could be unacceptable downtime in some circumstances. Features like High Availability would be better suited to address that need.',
                            'screenshots' => [
                                
                            ],
                            'code' => ''
                        ],
                        5 => [
                            'id' => 'sys-6',
                            'title' => 'Final Project Fall 2025 - Linux 3',
                            'tags' => [
                                0 => 'Linux',
                                1 => 'SSH',
                                2 => 'LAMP'
                            ],
                            'description' => 'Description of the project.',
                            'learned' => 'What I learned.',
                            'screenshots' => [
                                
                            ],
                            'configs' => [
                                0 => [
                                    'label' => 'Basic System Maintenance Script',
                                    'code' => '#!/bin/bash

# Export log file
LOG="/var/log/sysm.log"

exec >> "$LOG"
exec 2>&1

# Finds logs to delete
find /tmp -type f -atime +7 -delete

# Find updates
apt update
apt upgrade -y

echo "Maintenance completed at $(date)"
'
                                ],
                                1 => [
                                    'label' => 'RSync to Backup Server',
                                    'code' => 'echo "Begin RSync replica to backup server..."
echo "Backup /SHARE6/"
echo "Destination share@192.168.100.12:/SHARE6/"
echo ""
/usr/bin/rsync -avz --delete -e \'ssh -p 2222\' /SHARE6/ share@192.168.100.12:/SHARE6/
'
                                ]
                            ]
                        ]
                    ]
                ],
                3 => [
                    'name' => 'Cloud',
                    'id' => 'cloud',
                    'projects' => [
                        0 => [
                            'id' => 'cld-1',
                            'title' => 'Final Project Summer 2025 - Cloud 1',
                            'tags' => [
                                0 => 'CloudFormation',
                                1 => 'VPC',
                                2 => 'AWS'
                            ],
                            'description' => 'Group work - Using a sandbox environment, we were tasked with configuring a VPC, web server, S3 static website hosting, and use CloudFormation to deploy Wordpress on an EC2 instance.',
                            'learned' => 'Many of these tasks were review from previous labs in this course, however this was one of the first times that I used AWS systems without the guardrails of a formal lab environment. The lab included several elements which are cloud deployment fundamentals such as VPC configuration, and S3 static hosting and we used instructor provided files to deploy our Wordpress stack.',
                            'screenshots' => [
                                0 => 'cld1-screenshot1.jpg',
                                1 => 'cld1-screenshot2.jpg',
                                2 => 'cld1-screenshot3.jpg'
                            ],
                            'code' => ''
                        ],
                        1 => [
                            'id' => 'cld-2',
                            'title' => 'Final Project - Cloud 2',
                            'tags' => [
                                0 => 'Lambda',
                                1 => 'Serverless',
                                2 => 'AWS'
                            ],
                            'description' => 'Description of the project.',
                            'learned' => 'What I learned.',
                            'screenshots' => [
                                
                            ],
                            'code' => ''
                        ]
                    ]
                ],
                4 => [
                    'name' => 'Automation',
                    'id' => 'automation',
                    'projects' => [
                        0 => [
                            'id' => 'aut-1',
                            'title' => 'Final Project Winter 2025 - PowerShell',
                            'tags' => [
                                0 => 'PowerShell',
                                1 => 'Scripting',
                                2 => 'Automation'
                            ],
                            'description' => 'This project was fairly straightforward, and applied basic systems administration principles and the PowerShell used throughout the course to automate the deployment of Windows Active Directory Domain Services using SSH and PowerShell. File shares were created and permissions tested to verify security.',
                            'learned' => 'Completing a familiar task using only PowerShell commands reinforced existing understandings of ADDS concepts and allowed me a much better understanding of how the forest is created under the hood. This project also allowed me to create my own ADDS script to automate deployment of these types of servers in the future, greatly increasing efficiency.',
                            'screenshots' => [
                                0 => 'aut1-screenshot1.jpg',
                                1 => 'aut1-screenshot2.png',
                                2 => 'aut1-screenshot3.png'
                            ],
                            'code' => ''
                        ]
                    ]
                ],
                5 => [
                    'name' => 'Databases',
                    'id' => 'databases',
                    'projects' => [
                        0 => [
                            'id' => 'db-1',
                            'title' => 'MySQL to PostgreSQL Migration',
                            'tags' => [
                                0 => 'MySQL',
                                1 => 'PostgreSQL',
                                2 => 'Migration'
                            ],
                            'description' => 'Description of the project.',
                            'learned' => 'What I learned.',
                            'screenshots' => [
                                
                            ],
                            'code' => ''
                        ],
                        1 => [
                            'id' => 'db-2',
                            'title' => 'Database Normalization',
                            'tags' => [
                                0 => 'SQL',
                                1 => 'Normalization',
                                2 => 'Schema Design'
                            ],
                            'description' => 'Description of the project.',
                            'learned' => 'What I learned.',
                            'screenshots' => [
                                
                            ],
                            'code' => ''
                        ],
                        2 => [
                            'id' => 'db-3',
                            'title' => 'Placeholder Project',
                            'tags' => [
                                0 => 'MariaDB',
                                1 => 'Queries'
                            ],
                            'description' => 'Description of the project.',
                            'learned' => 'What I learned.',
                            'screenshots' => [
                                
                            ],
                            'code' => ''
                        ]
                    ]
                ]
            ],
            'routable' => true
        ],
        'frontmatter' => 'title: \'Academic Works\'
template: academic
summary: \'A collection of coursework, projects, and academic achievements from my Computer Systems Technology diploma.\'
header_image: academic.jpg
categories:
    -
        name: Networking
        id: networking
        projects:
            -
                id: net-1
                title: \'Capstone Project Fall 2024, Data Communications 2\'
                tags:
                    - STP
                    - Switching
                    - VLAN
                description: "Group work - Our Data Communications II class focused heavily on switching concepts like STP and VLANS, and this project was our first tangible experience using lab equipment to build real enterprise networks. This project was particularly challenging because it included an understanding of basic routing to complete."
                learned: "This project was complicated for my skill level at the time. We needed to implement port security, etherchannel between two office buildings and configure a DHCP server. We segmented the network with VLANs and configured dual ISP failover. We made a lot of mistakes in this project, including messing up our addressing table so it didn\'t work at first, implementing VLANs incorrectly on the wrong interfaces, and our router didn\'t work for most of the project. However this project taught me to have patience with my work and have a better mental understanding of the overall network schema."
                screenshots:
                  - "net1-screenshot1.jpg"
                  - "net1-screenshot2.jpg"
                configs:
                    -
                        label: "Building 1 - BD1 Switch"
                        code: |
                            interface Port-channel1
                             switchport trunk native vlan 24
                             switchport trunk allowed vlan 10,20,24,30,40,50
                             switchport mode trunk
                             switchport nonegotiate
                            interface GigabitEthernet1/0/2
                             switchport trunk native vlan 24
                             switchport trunk allowed vlan 10,20,24,30,40,50
                             switchport mode trunk
                             switchport nonegotiate
                             switchport port-security violation protect
                             switchport port-security mac-address sticky
                             switchport port-security mac-address sticky 38f3.ab13.23b3
                             switchport port-security aging time 60
                             switchport port-security
                             channel-group 1 mode active
                            interface GigabitEthernet1/0/3
                             switchport access vlan 20
                             switchport mode access
                             switchport nonegotiate
                             switchport port-security violation protect
                             switchport port-security mac-address sticky
                             switchport port-security mac-address sticky 38f3.ab13.23b3
                             switchport port-security aging time 60
                             switchport port-security
                             channel-group 1 mode active
                    -
                        label: "Building 2 - BD2 Switch"
                        code: |
                            interface Port-channel1
                             switchport trunk native vlan 24
                             switchport trunk allowed vlan 10,20,24,30,40,50
                             switchport mode trunk
                             switchport nonegotiate
                            interface GigabitEthernet1/0/2
                             switchport trunk native vlan 24
                             switchport trunk allowed vlan 10,20,24,30,40,50
                             switchport mode trunk
                             switchport nonegotiate
                             channel-group 1 mode active
                            interface GigabitEthernet1/0/3
                             switchport trunk native vlan 24
                             switchport trunk allowed vlan 10,20,24,30,40,50
                             switchport mode trunk
                             switchport nonegotiate
                             channel-group 1 mode active
            -
                id: net-2
                title: \'Capstone Project Winter 2025, Data Communications 3\'
                tags:
                    - Multi-site
                    - Routing
                    - VPN
                description: "Group work - For our winter 2025 capstone project we were tasked with designing a network with two sites connected through an ISP router with encrypted communications using a GRE tunnel, implementing OSPF, configuring ACLs to secure the network and implementing NAT. Our chosen implementation involved three routers; SecureNet, SafeTech and TelCom, and a fourth router was provisioned but not configured called ISP2 as a backup option for the company. A loopback address was configured on the ISP router to simulate a remote webserver endpoint."
                learned: "Utilizing the GRE tunnel and ACL rules for secure connections, this project taught lessons about efficient address usage, and verifying correct information. Several times our GRE tunnel ended up in a state where it was quasi-working, where each endpoint could contact each other but nobody could each the web server. These sorts of technical troubleshooting processes have taught me a lot about persistence."
                screenshots:
                  - "net2-screenshot1.jpg"
                  - "net2-screenshot2.jpg"
                  - "net2-screenshot3.png"
                  - "net2-screenshot4.png"
                code: \'\'
            -
                id: net-3
                title: \'Final Case Study Fall 2025 - VoIP\'
                tags:
                    - VoIP
                    - SIP
                    - FreePBX
                description: "Group work - Throughout this VoIP course we explored configuring PBX servers and calling through them using SIP trunking and dial peers. In this final case study, our group was tasked with meeting a business need for a multi-site VoIP system. The two branch offices were connected via the Headquarters router and each site had it\'s own PBX server to serve clients locally, and a SIP trunk was configured to allow inter-PBX calls. Each site was configured with two Linphone softphones for testing purposes."
                learned: "FreePBX OS has quite a learning curve to it, and when combining three PBX instances together across a network it can introduce some issues. Linphones would register to the wrong instances, or DHCP would not be functioning however after correcting some minor issues with our configuration our design held up to the challenge presented and all phones could contact one another."
                screenshots:
                  - "net3-screenshot1.png"
                  - "net3-screenshot2.jpg"
                  - "net3-screenshot3.jpg"
                  - "net3-screenshot4.png"
                code: \'\'
    -
        name: Security
        id: security
        projects:
            -
                id: sec-1
                title: \'Capstone Project Fall 2025 - Security 1\'
                tags:
                    - Cisco
                    - Firewall
                    - VPN
                description: "Group work - A small business called Mastermind IT Services requires a site-to-site IPSec VPN for their business operations. This VPN was implemented using Cisco Firepower 1010 devices on a custom network built for MITS. Four endpoints were used to verify end-to-end connectivity and test the DMZ functionality required by the company."
                learned: "Using the Cisco Firepower devices, I learned to configure security groups, security zones and NAT rules alongside reinforcing existing concepts for access control lists and DMZ isolation. The web server in this case proved interesting as because our Firepower was using a fake ISP stand-in with a loopback at the other end to simulate our backend, it was looking for updates to rules. We found out that sometimes in a lab environment, the best update mode is off."
                screenshots:
                  - "sec1-screenshot1.jpg"
                  - "sec1-screenshot2.jpg"
                  - "sec1-screenshot3.jpg"
                  - "sec1-screenshot4.jpg"
                code: \'\'
    -
        name: \'Systems Administration\'
        id: sysadmin
        projects:
            -
                id: sys-1
                title: \'Final Project Winter 2025 - Network Administration 1\'
                tags:
                    - \'Active Directory\'
                    - DNS
                    - DHCP
                description: "For this project I was tasked with creating a simple Active Directory domain using Windows Server 2022 GUI. I configured spencer.com, added some users (including a non root admin user) and created a nested network fileshare with NTFS permissions configured. On one of the servers IIS was configured along with an iSCSI virtual disk for easy sharing across the network. On the domain controller, DNS and DHCP roles were configured."
                learned: "Many existing concepts were reinforced with continual good practice, such as configuring a non root admin user, file share permissions, and Windows Server ADDS and IIS configuration. During this particular project, my VMWare vNet corrupted and needed to be reset which was a learning experience unto itself."
                screenshots:
                  - "sys1-screenshot1.jpg"
                  - "sys1-screenshot2.png"
                code: \'\'
            -
                id: sys-2
                title: \'Administering and Monitoring Project Summer 2025 - Network Administration 2\'
                tags:
                    - \'Remote Admin\'
                    - ADCS
                    - GPO
                description: "A basic network was built and used as a baseline for GPO configurations to be tested, certificates to be deployed, monitored by remote tools like Windows Admin Centre and RSAT. Disk quotas and data deduplication were configured on NTFS file shares for company use. Four VMs would be used for this project. Three would be servers with the ADDS, DNS, DHCP, ADCS and File Server roles, with an admin workstation added for remote adminisitration."
                learned: "Windows Server ADCS can be difficult to use, but eventually I got the hang of template deployment. Core skills were refined further, adding complexity with RSAT and WAC tool.s Though this project was run on VMWare workstation, students were prevented from using the console to access servers, instead after post installation tasks were performed remote administration was configured."
                screenshots:
                  - "sys2-screenshot1.jpg"
                  - "sys2-screenshot2.png"
                  - "sys2-screenshot3.png"
                  - "sys2-screenshot4.png"
                  - "sys2-screenshot5.png"
                code: \'\'
            -
                id: sys-3
                title: \'Storage Management Project Summer 2025 - Linux 2\'
                tags:
                    - Linux
                    - SSH
                    - LVM
                description: "In this project, a storage layout was planned manually for later LVM implementation. A second storage drive was added repliicating the first to combine the two drives using LVM. User disk quotas were used to ensure compliance with write policy. Implementing the layout, each drive was about 20 GiB and was mounted before the LVM was created."
                learned: "This specific project took a bit of practice on different vmdisks but learning to correctly partition and plan a harddisk layout has allowed me to apply that thinking to other OS like Windows, and to keep my storage layout in mind including file systems. In this project, I decided to go with 4 partitions, with 3 dedicated to file needs and 1 for swap."
                screenshots:
                  - "sys3-screenshot1.png"
                  - "sys3-screenshot2.png"
                  - "sys3-screenshot3.png"
                  - "sys3-screenshot4.png"
                  - "sys3-screenshot5.png"
                code: \'\'
            -
                id: sys-4
                title: \'Failover Clustering Summer 2025 - Virtualization\'
                tags:
                    - HyperV
                    - Cluster
                    - SAN
                description: "Using a small network created locally on our VMWare workstation hosts, I needed to create a failover cluster using Windows Server 2022 and a HyperV environment. An ADDS environment was used in the background to provide DNS services; needed for HyperV and two HyperV servers were used as access nodes. A drive was configured on the domain controller which would act as an iSCSI target for the SAN used to host ISO images and vmdisks for the HyperV servers. Features such as multipath I/O, and failover clustering were installed on both HyperV servers."
                learned: "Virtualization technology can be finnicky and in this project the most issues I experienced were due to the Windows environment not playing nicely with running nested virtualization roles. I overcame these issues with careful workarounds, some involving bypassing core isolation to make it function. Once the servers were functional with the HyperV roles it was a matter of creating the SAN which was important for the cluster, and bringing the volumes online and adding them to the failover cluster. Most of these tasks were GUI related, but having hands on experience with these virtualization tools was invaluable."
                screenshots:
                  - "sys4-screenshot1.png"
                  - "sys4-screenshot2.jpg"
                  - "sys4-screenshot3.jpg"
                  - "sys4-screenshot4.jpg"
                code: \'\'
            -
                id: sys-5
                title: \'Final Project Summer 2025 - Virtualization\'
                tags:
                    - HyperV
                    - Replica
                    - \'Active Directory\'
                description: "Group work - HyperV Replica is a feature of Windows Server HyperV which allows for the replication of virtual machines across the intranet or internet. Replica is primarily a disaster recovery tool used for quick response to workload disruption, and in this project we were tasked with demonstrating a live migration of a HyperV VM from one simulated site to another using our lab LAN. This allowed for an emulated network layer between our VMWare Workstation clients to provide some friction for the replica."
                learned: "HyperV Replica was straightforward to configure. The primary focus of this project was the research about the protocols and process involved, specifically during the live migration we gained an appreciation for the complexity required to move operating systems with ease. Most of our learning was done in the configuration steps, where we configured multi-path I/O and Replica. We also learned that should the VM experience a failure an administrator would need to intervene to manually invoke the replication, which could be unacceptable downtime in some circumstances. Features like High Availability would be better suited to address that need."
                screenshots: {  }
                code: \'\'
            -
                id: sys-6
                title: \'Final Project Fall 2025 - Linux 3\'
                tags:
                    - Linux
                    - SSH
                    - LAMP
                description: \'Description of the project.\'
                learned: \'What I learned.\'
                screenshots: {  }
                configs:
                    -
                        label: "Basic System Maintenance Script"
                        code: |
                         #!/bin/bash

                         # Export log file
                         LOG="/var/log/sysm.log"

                         exec >> "$LOG"
                         exec 2>&1
                         
                         # Finds logs to delete
                         find /tmp -type f -atime +7 -delete

                         # Find updates
                         apt update
                         apt upgrade -y

                         echo "Maintenance completed at $(date)"
                    -
                        label: "RSync to Backup Server"
                        code: |
                         echo "Begin RSync replica to backup server..."
                         echo "Backup /SHARE6/"
                         echo "Destination share@192.168.100.12:/SHARE6/"
                         echo ""
                         /usr/bin/rsync -avz --delete -e \'ssh -p 2222\' /SHARE6/ share@192.168.100.12:/SHARE6/
    -
        name: Cloud
        id: cloud
        projects:
            -
                id: cld-1
                title: \'Final Project Summer 2025 - Cloud 1\'
                tags:
                    - CloudFormation
                    - VPC
                    - AWS
                description: "Group work - Using a sandbox environment, we were tasked with configuring a VPC, web server, S3 static website hosting, and use CloudFormation to deploy Wordpress on an EC2 instance."
                learned: "Many of these tasks were review from previous labs in this course, however this was one of the first times that I used AWS systems without the guardrails of a formal lab environment. The lab included several elements which are cloud deployment fundamentals such as VPC configuration, and S3 static hosting and we used instructor provided files to deploy our Wordpress stack."
                screenshots:
                  - "cld1-screenshot1.jpg"
                  - "cld1-screenshot2.jpg"
                  - "cld1-screenshot3.jpg"
                code: \'\'
            -
                id: cld-2
                title: \'Final Project - Cloud 2\'
                tags:
                    - Lambda
                    - Serverless
                    - AWS
                description: \'Description of the project.\'
                learned: \'What I learned.\'
                screenshots: {  }
                code: \'\'
    -
        name: Automation
        id: automation
        projects:
            -
                id: aut-1
                title: \'Final Project Winter 2025 - PowerShell\'
                tags:
                    - PowerShell
                    - Scripting
                    - Automation
                description: "This project was fairly straightforward, and applied basic systems administration principles and the PowerShell used throughout the course to automate the deployment of Windows Active Directory Domain Services using SSH and PowerShell. File shares were created and permissions tested to verify security."
                learned: "Completing a familiar task using only PowerShell commands reinforced existing understandings of ADDS concepts and allowed me a much better understanding of how the forest is created under the hood. This project also allowed me to create my own ADDS script to automate deployment of these types of servers in the future, greatly increasing efficiency."
                screenshots:
                  - "aut1-screenshot1.jpg"
                  - "aut1-screenshot2.png"
                  - "aut1-screenshot3.png"
                code: \'\'
    -
        name: Databases
        id: databases
        projects:
            -
                id: db-1
                title: \'MySQL to PostgreSQL Migration\'
                tags:
                    - MySQL
                    - PostgreSQL
                    - Migration
                description: \'Description of the project.\'
                learned: \'What I learned.\'
                screenshots: {  }
                code: \'\'
            -
                id: db-2
                title: \'Database Normalization\'
                tags:
                    - SQL
                    - Normalization
                    - \'Schema Design\'
                description: \'Description of the project.\'
                learned: \'What I learned.\'
                screenshots: {  }
                code: \'\'
            -
                id: db-3
                title: \'Placeholder Project\'
                tags:
                    - MariaDB
                    - Queries
                description: \'Description of the project.\'
                learned: \'What I learned.\'
                screenshots: {  }
                code: \'\'
routable: true',
        'markdown' => ''
    ]
];
