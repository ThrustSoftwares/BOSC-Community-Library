# Legal Analysis: GPLv3 for the BOSC Community Library

**Course:** BSCT 3221 - Open Source Software  
**Project:** BOSC Community Library  
**Chosen License:** GNU General Public License version 3.0 (GPLv3)

## Introduction

The BOSC Community Library is intended to serve schools, universities, community learning centers, and public-sector education offices. Because the project is built for public benefit, the license must do more than allow people to view the source code. It must protect the public investment behind the software, preserve transparency, and prevent a situation where a private vendor takes community-funded work, closes it, and sells it back to schools under restrictive terms. For that reason, this repository uses the GNU General Public License version 3.0.

## Why GPLv3 Fits a Public-Sector Project

GPLv3 is superior for this project because it treats software freedom as a long-term public guarantee. A permissive license such as MIT or BSD would allow almost anyone to reuse the code in a closed commercial product. That can be useful for some developer tools, but it is risky for a public-sector education platform. If public institutions, students, and volunteers contribute improvements to the BOSC Community Library, those improvements should remain available to future users.

The GPLv3 achieves this through copyleft. If a person or organization distributes a modified version of the system, they must provide the corresponding source code under the same license. This means a district, ministry contractor, university, or private service provider can improve the library, but cannot distribute those improvements as a closed fork. The result is a healthier public commons: bug fixes, accessibility improvements, localization work, and security patches can return to the community instead of disappearing into private products.

For government transparency, GPLv3 also supports auditability. Public institutions need systems that can be inspected for security, data handling, procurement fairness, and long-term maintainability. A GPLv3 project gives technical teams the legal right to study and modify the system, which is important when software is used in education and may influence access to learning materials.

## Patent and Trademark Considerations

GPLv3 includes an explicit patent grant from contributors. This is an important improvement over simpler permissive licenses that may not address patents clearly. If a contributor adds code that is covered by a patent they control, GPLv3 helps ensure that downstream users receive permission to use that patent as part of the licensed software. This reduces the risk of patent aggression against schools, public agencies, or local implementers using the BOSC Community Library.

Compared with Apache License 2.0, GPLv3 is stronger on copyleft while still addressing patents. Apache 2.0 has a clear patent grant, but it allows proprietary redistribution. GPLv3 combines patent protection with the requirement that distributed modified versions remain open. That combination is better aligned with the project's public-interest goals.

Trademark protection is different from copyright licensing. GPLv3 allows people to copy, modify, and distribute the code, but it does not automatically give them the right to use project names, logos, or official branding in a misleading way. This matters because an outside organization could create a modified version, but it should not be able to falsely present that version as the official BOSC Community Library if it has not been approved by the maintainers. The project should therefore maintain separate trademark guidance in its governance documentation as it matures.

## Commercial Use and Paid Versions

GPLv3 does not ban commercial activity. A company may charge money for installation, hosting, training, support, customization, or even distribution of the software. However, if it distributes a modified version of the BOSC Community Library, it must provide the source code for those modifications under GPLv3. This creates a fair balance: businesses can build services around the library, but they cannot take away the freedoms that the original community received.

A commercial entity could therefore offer a paid hosted version for schools that lack technical staff. It could also provide data migration, backup management, teacher training, and security monitoring. What it cannot do is convert the distributed software into a closed product while benefiting from the community's work. This protects schools from vendor lock-in because they can always move to another provider or self-host the system if pricing, service quality, or policy requirements change.

## Conclusion

GPLv3 is the strongest fit for the BOSC Community Library because it protects transparency, public ownership, patent safety, and long-term community benefit. It allows commercial participation, but only under conditions that preserve user freedom. For an educational system intended to serve the public, that balance is more appropriate than a permissive license that could allow community work to become closed infrastructure.
