<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/02.portfolio/01.professional-resume/default.md',
    'modified' => 1771921851,
    'size' => 3392,
    'data' => [
        'header' => [
            'title' => 'Professional Resume',
            'template' => 'resume',
            'header_image' => 'resume.jpg',
            'contact' => [
                'location' => 'Durham Region, Ontario',
                'email' => 'sbfevreau@hotmail.com',
                'linkedin' => 'https://www.linkedin.com/in/spencer-fevreau-tech/',
                'github' => 'https://github.com/massiveBigGuy'
            ],
            'summary' => 'Telecom professional and computer systems/cybersecurity student.',
            'skills' => [
                0 => [
                    'category' => 'Networking & Infrastructure',
                    'items' => [
                        0 => 'Network cabling',
                        1 => 'TCP/IP',
                        2 => 'DNS',
                        3 => 'Firewall management',
                        4 => 'Cisco iOS',
                        5 => 'SDN'
                    ]
                ],
                1 => [
                    'category' => 'Systems Administration',
                    'items' => [
                        0 => 'Proxmox VE',
                        1 => 'VMware ESXi',
                        2 => 'Windows Server',
                        3 => 'Active Directory',
                        4 => 'HyperV',
                        5 => 'Linux (Debian/Ubuntu)',
                        6 => 'VoIP'
                    ]
                ],
                2 => [
                    'category' => 'Application',
                    'items' => [
                        0 => 'LAMP/LEMP',
                        1 => 'ELK(SIEM)',
                        2 => 'Docker',
                        3 => 'M365',
                        4 => 'Exchange(on prem)'
                    ]
                ],
                3 => [
                    'category' => 'Cloud',
                    'items' => [
                        0 => 'AWS',
                        1 => 'Azure',
                        2 => 'Linode'
                    ]
                ],
                4 => [
                    'category' => 'Automation',
                    'items' => [
                        0 => 'PowerShell',
                        1 => 'Bash scripting',
                        2 => 'Python'
                    ]
                ],
                5 => [
                    'category' => 'Relational Database',
                    'items' => [
                        0 => 'mariaDB, SQL, PostgreSQL'
                    ]
                ]
            ],
            'certifications' => [
                0 => 'AWS Academy Cloud Foundations',
                1 => 'Bell Telecom Technician Training',
                2 => 'Durham College — Computer Systems Technology Diploma (Expected 2025)',
                3 => 'Durham College — Protection Security Investigation Diploma'
            ],
            'experience' => [
                0 => [
                    'title' => 'Fibre Optic Technician',
                    'company' => 'Bell Technical Solutions',
                    'period' => '2021 — Present',
                    'points' => [
                        0 => 'Responsibilities include installation and repair of fiber optic FTTH internet, IPTV, and home phone services, installing for the future to keep the network clean.',
                        1 => 'Configuration of gateway modems, fiber terminals, central splitting points, precise splice connections to ensure maximum uptime.',
                        2 => 'Technical knowledge of common structures to run compliant cable, operational safety practices, equipment, and training to handle heights, including the use of ladders to climb telephone poles, strands, homes and other small structures. Working with safety around telecom, electrical, natural gas and other public infrastructure equipment in all weather conditions.',
                        3 => 'Responsibility for company equipment including vehicles, tools, other inventory; completing documentation of equipment and manual upkeep of inventory for assigned vehicles. Maintenance and upkeep of personal inventory and assigned tools.'
                    ]
                ],
                1 => [
                    'title' => 'Security Guard',
                    'company' => 'Paragon Security',
                    'period' => '2020 — 2023',
                    'points' => [
                        0 => 'At healthcare sites such as Ontario Shores and Lakeridge Health, to education facilities such as Durham College and Ontario Tech University',
                        1 => 'Worked with access control systems and fire panels, performed monitoring and footage review, responded to incidents, performed physical patrols of the campus, coordinated & responded with emergency services.'
                    ]
                ]
            ],
            'education' => [
                0 => [
                    'degree' => 'Computer Systems Technology Diploma',
                    'institution' => 'Durham College',
                    'period' => '2023 — Present',
                    'notes' => 'Coursework focused on IT systems and business solutions for industry. Key courses include computer hardware, data communications & networking, databases, web development, computer software, virtualization, Linux, PowerShell, and cyber security.'
                ],
                1 => [
                    'degree' => 'Protection Security and Investigation (PSI)',
                    'institution' => 'Durham College',
                    'period' => '2018 — 2020',
                    'notes' => 'Program mainly focused on law enforcement procedures and training, security principles and best practices.'
                ]
            ],
            'pdf' => '/user/data/resume.pdf'
        ],
        'frontmatter' => 'title: Professional Resume
template: resume
header_image: resume.jpg

contact:
  location: "Durham Region, Ontario"
  email: "sbfevreau@hotmail.com"
  linkedin: "https://www.linkedin.com/in/spencer-fevreau-tech/"
  github: "https://github.com/massiveBigGuy"

summary: "Telecom professional and computer systems/cybersecurity student."

skills:
  - category: "Networking & Infrastructure"
    items: ["Network cabling", "TCP/IP", "DNS", "Firewall management", "Cisco iOS", "SDN"]
  - category: "Systems Administration"
    items: ["Proxmox VE", "VMware ESXi", "Windows Server", "Active Directory", "HyperV", "Linux (Debian/Ubuntu)", "VoIP"]
  - category: "Application"
    items: ["LAMP/LEMP", "ELK(SIEM)", "Docker", "M365", "Exchange(on prem)"]
  - category: "Cloud"
    items: ["AWS", "Azure", "Linode"]
  - category: "Automation"
    items: ["PowerShell", "Bash scripting", "Python"]
  - category: "Relational Database"
    items: ["mariaDB, SQL, PostgreSQL"]

certifications:
  - "AWS Academy Cloud Foundations"
  - "Bell Telecom Technician Training"
  - "Durham College — Computer Systems Technology Diploma (Expected 2025)"
  - "Durham College — Protection Security Investigation Diploma"
  

experience:
  - title: "Fibre Optic Technician"
    company: "Bell Technical Solutions"
    period: "2021 — Present"
    points:
      - "Responsibilities include installation and repair of fiber optic FTTH internet, IPTV, and home phone services, installing for the future to keep the network clean."
      - "Configuration of gateway modems, fiber terminals, central splitting points, precise splice connections to ensure maximum uptime."
      - "Technical knowledge of common structures to run compliant cable, operational safety practices, equipment, and training to handle heights, including the use of ladders to climb telephone poles, strands, homes and other small structures. Working with safety around telecom, electrical, natural gas and other public infrastructure equipment in all weather conditions."
      - "Responsibility for company equipment including vehicles, tools, other inventory; completing documentation of equipment and manual upkeep of inventory for assigned vehicles. Maintenance and upkeep of personal inventory and assigned tools."
  - title: "Security Guard"
    company: "Paragon Security"
    period: "2020 — 2023"
    points:
      - "At healthcare sites such as Ontario Shores and Lakeridge Health, to education facilities such as Durham College and Ontario Tech University"
      - "Worked with access control systems and fire panels, performed monitoring and footage review, responded to incidents, performed physical patrols of the campus, coordinated & responded with emergency services."

education:
  - degree: "Computer Systems Technology Diploma"
    institution: "Durham College"
    period: "2023 — Present"
    notes: "Coursework focused on IT systems and business solutions for industry. Key courses include computer hardware, data communications & networking, databases, web development, computer software, virtualization, Linux, PowerShell, and cyber security."
  - degree: "Protection Security and Investigation (PSI)"
    institution: "Durham College"
    period: "2018 — 2020"
    notes: "Program mainly focused on law enforcement procedures and training, security principles and best practices."

pdf: "/user/data/resume.pdf"',
        'markdown' => ''
    ]
];
