<?
	$cord_x = (round($Worldspace[1]/100));
	$cord_y = (round(154-($Worldspace[2]/100)));

?>
							�����:&nbsp;<span style="font-weight:bold"><span style="color:green; text-shadow:0 0 4px black">
							
							<?
//�������� �� ����������� ����������� ������ �� �����������
					//������
							if ($cord_x >= 92	and $cord_x <= 108	and $cord_y >= 128	and $cord_y <= 138)	{ echo '�.��������������';}
							elseif ($cord_x >= 126	and $cord_x <= 135	and $cord_y >= 81	and $cord_y <= 93)	{ echo '�.���������';}
							elseif ($cord_x >= 61	and $cord_x <= 72	and $cord_y >= 121	and $cord_y <= 132)	{ echo '�.����������';}
							elseif ($cord_x >= 116	and $cord_x <= 132	and $cord_y >= 49	and $cord_y <= 65)	{ echo '�.��������';}
							elseif ($cord_x >= 21	and $cord_x <= 30	and $cord_y >= 96	and $cord_y <= 103)	{ echo '�.�����������';}
							elseif ($cord_x >= 106	and $cord_x <= 115	and $cord_y >= 27	and $cord_y <= 33)	{ echo '�.����������';}
							elseif ($cord_x >= 83	and $cord_x <= 88	and $cord_y >= 32	and $cord_y <= 38)	{ echo '�.�������';}
					//�������		
							elseif ($cord_x >= 118	and $cord_x <= 122	and $cord_y >= 116	and $cord_y <= 119)	{ echo '�.��������';}
							elseif ($cord_x >= 58	and $cord_x <= 63	and $cord_y >= 73	and $cord_y <= 78)	{ echo '�.������ �����';}
							elseif ($cord_x >= 68	and $cord_x <= 72	and $cord_y >= 75	and $cord_y <= 77)	{ echo '�.����� �����';}
							elseif ($cord_x >= 116	and $cord_x <= 132	and $cord_y >= 49	and $cord_y <= 65)	{ echo '�.������';}
							elseif ($cord_x >= 126	and $cord_x <= 129	and $cord_y >= 108	and $cord_y <= 110)	{ echo '�.�����';}
							elseif ($cord_x >= 76	and $cord_x <= 81	and $cord_y >= 117	and $cord_y <= 122)	{ echo '�.����������';}
							elseif ($cord_x >= 34	and $cord_x <= 38	and $cord_y >= 127	and $cord_y <= 132)	{ echo '�.��������';}
							elseif ($cord_x >= 16	and $cord_x <= 20	and $cord_y >= 129	and $cord_y <= 132)	{ echo '�.�������';}
							elseif ($cord_x >= 15	and $cord_x <= 18	and $cord_y >= 113	and $cord_y <= 117)	{ echo '�.�������';}
							elseif ($cord_x >= 32	and $cord_x <= 35	and $cord_y >= 103	and $cord_y <= 105)	{ echo '�.�������';}
							elseif ($cord_x >= 32	and $cord_x <= 35	and $cord_y >= 103	and $cord_y <= 105)	{ echo '�.��������';}
							elseif ($cord_x >= 50	and $cord_x <= 55	and $cord_y >= 65	and $cord_y <= 69)	{ echo '�.��������';}
							elseif ($cord_x >= 57	and $cord_x <= 62	and $cord_y >= 47	and $cord_y <= 53)	{ echo '�.�������';}
							elseif ($cord_x >= 132	and $cord_x <= 134	and $cord_y >= 24	and $cord_y <= 25)	{ echo '�.�����';}
					//���		
							elseif ($cord_x >= 132	and $cord_x <= 137	and $cord_y >= 111	and $cord_y <= 115)	{ echo '��� ������';}
							elseif ($cord_x >= 81	and $cord_x <= 84	and $cord_y >= 127	and $cord_y <= 132)	{ echo '��� ������';}
					//�������		
							elseif ($cord_x >= 114	and $cord_x <= 118	and $cord_y >= 120	and $cord_y <= 123)	{ echo '�.������';}
							elseif ($cord_x >= 111	and $cord_x <= 112	and $cord_y >= 127	and $cord_y <= 129)	{ echo '�.������';}
					//������
							elseif ($cord_x >= 102	and $cord_x <= 108	and $cord_y >= 119	and $cord_y <= 125)	{ echo '������';}
							elseif ($cord_x >= 66	and $cord_x <= 71	and $cord_y >= 37	and $cord_y <= 42)	{ echo '������ �����';}
							elseif ($cord_x >= 99	and $cord_x <= 105	and $cord_y >= 31	and $cord_y <= 35)	{ echo '������ ����';}
							elseif ($cord_x >= 107	and $cord_x <= 110	and $cord_y >= 23	and $cord_y <= 26)	{ echo '������';}
					//�����		
							elseif ($cord_x >= 18	and $cord_x <= 25	and $cord_y >= 23	and $cord_y <= 29)	{ echo '������';}
							elseif ($cord_x >= 40	and $cord_x <= 51	and $cord_y >= 43	and $cord_y <= 58)	{ echo '������� ����';}
							elseif ($cord_x >= 46	and $cord_x <= 53	and $cord_y >= 127	and $cord_y <= 132)	{ echo '��� "������"';}
							elseif ($cord_x >= 117	and $cord_x <= 126	and $cord_y >= 24	and $cord_y <= 28)	{ echo '��� "����������"';}
							elseif ($cord_x > 0		and $cord_x < 145	and $cord_y > 0		and $cord_y < 135)	{ echo '���������';}

							elseif ($cord_x != abs($cord_x))	{ echo '��������';} // �����-���� ����� ����� ������������� ��� ������� ����������, �� �������� �����
							else { echo '<span style="color:red; text-shadow:0 0 4px black">����������</span>';} // ����� ��������� �� ����������
							echo '</span></span>';
							?>