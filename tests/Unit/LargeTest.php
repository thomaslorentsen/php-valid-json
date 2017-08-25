<?php

class LargeTest extends \PHPUnit_Framework_TestCase
{

    public function testLarge()
    {
        $body = /** @lang json */ <<<BODY
[{
  "nameservers" : [ {
    "name" : "dns1.stabletransit.com"
  }, {
    "name" : "dns2.stabletransit.com"
  } ],
  "recordsList" : {
    "records" : [ {
      "updated" : "2011-05-19T13:07:08.000+0000",
      "ttl" : 5771,
      "created" : "2011-05-18T19:53:09.000+0000",
      "name" : "ftp.example.com",
      "id" : "A-6817754",
      "type" : "A",
      "data" : "192.0.2.8"
    }, {
      "updated" : "2011-06-24T01:12:52.000+0000",
      "ttl" : 86400,
      "created" : "2011-06-24T01:12:52.000+0000",
      "name" : "example.com",
      "id" : "A-6822994",
      "type" : "A",
      "data" : "192.0.2.17"
    }, {
      "updated" : "2011-06-24T01:12:51.000+0000",
      "ttl" : 3600,
      "created" : "2011-06-24T01:12:51.000+0000",
      "name" : "example.com",
      "id" : "NS-6251982",
      "type" : "NS",
      "data" : "dns1.stabletransit.com"
    }, {
      "updated" : "2011-06-24T01:12:51.000+0000",
      "ttl" : 3600,
      "created" : "2011-06-24T01:12:51.000+0000",
      "name" : "example.com",
      "id" : "NS-6251983",
      "type" : "NS",
      "data" : "dns2.stabletransit.com"
    }, {
      "updated" : "2011-06-24T01:12:53.000+0000",
      "ttl" : 3600,
      "created" : "2011-06-24T01:12:53.000+0000",
      "name" : "example.com",
      "id" : "MX-3151218",
      "priority" : 5,
      "type" : "MX",
      "data" : "mail.example.com"
    }, {
      "updated" : "2011-06-24T01:12:54.000+0000",
      "ttl" : 5400,
      "created" : "2011-06-24T01:12:54.000+0000",
      "name" : "www.example.com",
      "id" : "CNAME-9778009",
      "type" : "CNAME",
      "comment" : "This is a comment on the CNAME record",
      "data" : "example.com"
    } ],
    "totalEntries" : 6
  },
  "emailAddress" : "sample@rackspace.com",
  "updated" : "2011-06-24T01:23:15.000+0000",
  "ttl" : 3600,
  "created" : "2011-06-24T01:12:51.000+0000",
  "accountId" : 1234,
  "name" : "example.com",
  "id" : 2725233,
  "comment" : "Optional domain comment..."
}]
BODY;

        $parser = new Parse\Json();
        $parser->decode($body);
    }
    public function testLarger()
    {
        $body = /** @lang json */ <<<BODY
{
    "access": {
        "serviceCatalog": [
            {
                "endpoints": [
                    {
                        "publicURL": "https://cdn2.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "ORD",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "publicURL": "https://cdn1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "DFW",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "publicURL": "https://cdn4.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "SYD",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "publicURL": "https://cdn5.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "IAD",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "publicURL": "https://cdn6.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "HKG",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    }
                ],
                "name": "cloudFilesCDN",
                "type": "rax:object-cdn"
            },
            {
                "endpoints": [
                    {
                        "internalURL": "https://snet-storage101.ord1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "publicURL": "https://storage101.ord1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "ORD",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "internalURL": "https://snet-storage101.syd2.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "publicURL": "https://storage101.syd2.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "SYD",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "internalURL": "https://snet-storage101.dfw1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "publicURL": "https://storage101.dfw1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "DFW",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "internalURL": "https://snet-storage101.iad3.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "publicURL": "https://storage101.iad3.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "IAD",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    },
                    {
                        "internalURL": "https://snet-storage101.hkg1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "publicURL": "https://storage101.hkg1.clouddrive.com/v1/MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                        "region": "HKG",
                        "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                    }
                ],
                "name": "cloudFiles",
                "type": "object-store"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://dfw.loadbalancers.api.rackspacecloud.com/v1.0/123456",
                        "region": "DFW",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://ord.loadbalancers.api.rackspacecloud.com/v1.0/123456",
                        "region": "ORD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://syd.loadbalancers.api.rackspacecloud.com/v1.0/123456",
                        "region": "SYD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://iad.loadbalancers.api.rackspacecloud.com/v1.0/123456",
                        "region": "IAD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://hkg.loadbalancers.api.rackspacecloud.com/v1.0/123456",
                        "region": "HKG",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudLoadBalancers",
                "type": "rax:load-balancer"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://iad.images.api.rackspacecloud.com/v2/123456",
                        "region": "IAD",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudImages",
                "type": "image"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://ord.autoscale.api.rackspacecloud.com/v1.0/123456",
                        "region": "ORD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://dfw.autoscale.api.rackspacecloud.com/v1.0/123456",
                        "region": "DFW",
                        "tenantId": "123456"
                    }
                ],
                "name": "autoscale",
                "type": "rax:autoscale"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://dfw.blockstorage.api.rackspacecloud.com/v1/123456",
                        "region": "DFW",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://ord.blockstorage.api.rackspacecloud.com/v1/123456",
                        "region": "ORD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://iad.blockstorage.api.rackspacecloud.com/v1/123456",
                        "region": "IAD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://syd.blockstorage.api.rackspacecloud.com/v1/123456",
                        "region": "SYD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://hkg.blockstorage.api.rackspacecloud.com/v1/123456",
                        "region": "HKG",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudBlockStorage",
                "type": "volume"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://monitoring.api.rackspacecloud.com/v1.0/123456",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudMonitoring",
                "type": "rax:monitor"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://ord.servers.api.rackspacecloud.com/v2/123456",
                        "region": "ORD",
                        "tenantId": "123456",
                        "versionId": "2",
                        "versionInfo": "https://ord.servers.api.rackspacecloud.com/v2",
                        "versionList": "https://ord.servers.api.rackspacecloud.com/"
                    },
                    {
                        "publicURL": "https://dfw.servers.api.rackspacecloud.com/v2/123456",
                        "region": "DFW",
                        "tenantId": "123456",
                        "versionId": "2",
                        "versionInfo": "https://dfw.servers.api.rackspacecloud.com/v2",
                        "versionList": "https://dfw.servers.api.rackspacecloud.com/"
                    },
                    {
                        "publicURL": "https://syd.servers.api.rackspacecloud.com/v2/123456",
                        "region": "SYD",
                        "tenantId": "123456",
                        "versionId": "2",
                        "versionInfo": "https://syd.servers.api.rackspacecloud.com/v2",
                        "versionList": "https://syd.servers.api.rackspacecloud.com/"
                    },
                    {
                        "publicURL": "https://iad.servers.api.rackspacecloud.com/v2/123456",
                        "region": "IAD",
                        "tenantId": "123456",
                        "versionId": "2",
                        "versionInfo": "https://iad.servers.api.rackspacecloud.com/v2",
                        "versionList": "https://iad.servers.api.rackspacecloud.com/"
                    },
                    {
                        "publicURL": "https://hkg.servers.api.rackspacecloud.com/v2/123456",
                        "region": "HKG",
                        "tenantId": "123456",
                        "versionId": "2",
                        "versionInfo": "https://hkg.servers.api.rackspacecloud.com/v2",
                        "versionList": "https://hkg.servers.api.rackspacecloud.com/"
                    }
                ],
                "name": "cloudServersOpenStack",
                "type": "compute"
            },
            {
                "endpoints": [
                    {
                        "internalURL": "https://snet-dfw.queues.api.rackspacecloud.com/v1/123456",
                        "publicURL": "https://dfw.queues.api.rackspacecloud.com/v1/123456",
                        "region": "DFW",
                        "tenantId": "123456"
                    },
                    {
                        "internalURL": "https://snet-ord.queues.api.rackspacecloud.com/v1/123456",
                        "publicURL": "https://ord.queues.api.rackspacecloud.com/v1/123456",
                        "region": "ORD",
                        "tenantId": "123456"
                    },
                    {
                        "internalURL": "https://snet-syd.queues.api.rackspacecloud.com/v1/123456",
                        "publicURL": "https://syd.queues.api.rackspacecloud.com/v1/123456",
                        "region": "SYD",
                        "tenantId": "123456"
                    },
                    {
                        "internalURL": "https://snet-iad.queues.api.rackspacecloud.com/v1/123456",
                        "publicURL": "https://iad.queues.api.rackspacecloud.com/v1/123456",
                        "region": "IAD",
                        "tenantId": "123456"
                    },
                    {
                        "internalURL": "https://snet-hkg.queues.api.rackspacecloud.com/v1/123456",
                        "publicURL": "https://hkg.queues.api.rackspacecloud.com/v1/123456",
                        "region": "HKG",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudQueues",
                "type": "rax:queues"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://syd.databases.api.rackspacecloud.com/v1.0/123456",
                        "region": "SYD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://ord.databases.api.rackspacecloud.com/v1.0/123456",
                        "region": "ORD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://dfw.databases.api.rackspacecloud.com/v1.0/123456",
                        "region": "DFW",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://iad.databases.api.rackspacecloud.com/v1.0/123456",
                        "region": "IAD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://hkg.databases.api.rackspacecloud.com/v1.0/123456",
                        "region": "HKG",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudDatabases",
                "type": "rax:database"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://backup.api.rackspacecloud.com/v1.0/123456",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudBackup",
                "type": "rax:backup"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://servers.api.rackspacecloud.com/v1.0/123456",
                        "tenantId": "123456",
                        "versionId": "1.0",
                        "versionInfo": "https://servers.api.rackspacecloud.com/v1.0",
                        "versionList": "https://servers.api.rackspacecloud.com/"
                    }
                ],
                "name": "cloudServers",
                "type": "compute"
            },
            {
                "endpoints": [
                    {
                        "publicURL": "https://dns.api.rackspacecloud.com/v1.0/123456",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudDNS",
                "type": "rax:dns"
            },
            {
                "endpoints": [
                    {
                        "publicUrl": "https://syd.orchestration.api.rackspacecloud.com/v1/123456",
                        "region": "SYD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://iad.orchestration.api.rackspacecloud.com/v1/123456",
                        "region": "IAD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://ord.orchestration.api.rackspacecloud.com/v1/123456",
                        "region": "ORD",
                        "tenantId": "123456"
                    },
                    {
                        "publicURL": "https://dfw.orchestration.api.rackspacecloud.com/v1/123456",
                        "region": "DFW",
                        "tenantId": "123456"
                    }
                ],
                "name": "cloudOrchestration",
                "type": "orchestration"
            },
            {
                "name": "cloudNetworks",
                "endpoints": [
                    {
                        "region": "IAD",
                        "tenantId": "123456",
                        "publicURL": "https://iad.networks.api.rackspacecloud.com/v2.0"
                    },
                    {
                        "region": "DFW",
                        "tenantId": "123456",
                        "publicURL": "https://dfw.networks.api.rackspacecloud.com/v2.0"
                    }
                ],
                "type": "network"
            },
            {
                "name": "rackCDN",
                "endpoints": [
                    {
                        "tenantId": "123456",
                        "publicURL": "https://global.cdn.api.rackspacecloud.com/v1.0/123456",
                        "internalURL": "https://global.cdn.api.rackspacecloud.com/v1.0/123456"
                    }
                ],
                "type": "rax:cdn"
            }
        ],
        "token": {
            "RAX-AUTH:authenticatedBy": [
                "APIKEY"
            ],
            "expires": "2013-11-13T10:49:29.409Z",
            "id": "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
            "tenant": {
                "id": "123456",
                "name": "123456"
            }
        },
        "user": {
            "RAX-AUTH:defaultRegion": "DFW",
            "id": "10048286",
            "name": "jamiehannaford1",
            "roles": [
                {
                    "description": "Checkmate Access role",
                    "id": "10000150",
                    "name": "checkmate"
                },
                {
                    "description": "User Admin Role.",
                    "id": "3",
                    "name": "identity:user-admin"
                },
                {
                    "description": "A Role that allows a user access to keystone Service methods",
                    "id": "5",
                    "name": "object-store:default",
                    "tenantId": "MossoCloudFS_XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
                },
                {
                    "description": "A Role that allows a user access to keystone Service methods",
                    "id": "6",
                    "name": "compute:default",
                    "tenantId": "123456"
                }
            ]
        }
    }
}

BODY;

        $parser = new Parse\Json();
        $parser->decode($body);
    }
}
